<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->search_category;
        $categories = Category::where('name', 'LIKE', "%$search%")->paginate(8);

        return view('category.category', compact('categories'));
    }


    public function create()
    {
        return view('category.category-create');
    }

    public function store(CategoryRequest $request)
    {
        $category = Category::create($request->all());

        if ($category) {
            Session::flash('success', 'success');
            Session::flash('message', 'New category has been added');
        }

        return redirect(route('category.index'));
    }


    public function show(Request $request, $id)
    {
        $search = $request->search_product;
        $today = today()->format('Y-m-d');
        $cart = Cart::where('user_id', Auth::id())->get();

        $products = Product::with('category')->where('category_id', $id)->where('name', 'LIKE', "%$search%")->
        where('release_date','<=',$today)->paginate(perPage: 8);

        return view('product.product', compact(['products','cart']));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('category.category-edit', compact('category'));
    }


    public function update(CategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());

        if ($category) {
            Session::flash('success', 'success');
            Session::flash('message', $request->name . ' successfully updated');
        }

        return redirect(route('category.index'));
    }


    public function destroy(Category $category, $id)
    {
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect(route('category.index'));
    }
}
