<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search_product;
        $today = today()->format('Y-m-d');

        $cart = Cart::where('user_id', Auth::id())->get();
        $products = Product::with('category')
        ->where('name', 'LIKE', "%$search%")
        ->where('release_date', '<=', $today)
        ->paginate(8);

        return view('product.product', compact(['products', 'cart']));
    }

    public function show($id)
    {
        $product = Product::with('category')->findOrFail($id);
        $cart = Cart::where('product_id', $id)->where('user_id', Auth::id())->first();
        $cartItem = Cart::where('user_id', Auth::id())->get();

        return view('product.product-detail', compact(['product', 'cart', 'cartItem']));
    }

    public function create()
    {
        $categories = Category::select(['id', 'name'])->get();

        return view('product.product-create', compact('categories'));
    }

    public function store(ProductRequest $request)
    {
        $file = '';

        if ($request->file('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $file = $request->name  . '-' . now()->timestamp . '.' . $extension;
            $request->file('photo')->storeAs('storage/released', $file, 'public_path');
        }

        $request['hor_image'] = $file;
        $request['ver_image'] = $file;
        $product = Product::create($request->all());

        if ($product) {
            Session::flash('success', 'success');
            Session::flash('message', 'Product successfully added');
        }

        return redirect(route('product.index'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::get(['id', 'name'])->except($product->id);

        return view('product.product-edit', compact(['product', 'categories']));
    }

    public function update(ProductRequest $request, $id)
    {
        $product = Product::findOrFail($id);

        $file1 = $product->hor_image;
        $file = $product->ver_image;


        if ($request->file('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $file = $request->name . '-' . now()->timestamp . '.' . $extension;
            $request->file('photo')->storeAs('storage/released', $file, 'public_path');
        }

        $request['hor_image'] = $file1;
        $request['ver_image'] = $file;
        $product->update($request->all());

        if ($product) {
            Session::flash('success', 'success');
            Session::flash('message', $product->name . ' updated');
        }

        return redirect(route('product.index'));
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $file = $product->image;
        $image_path = public_path('storage/product-image/' . $file);

        if (File::exists($image_path)) {
            File::delete($image_path);
        }

        if ($product) {
            Session::flash('destroy', 'destroy');
            Session::flash('message', $product->name . ' deleted');
        }

        $product->delete();

        return redirect(route('product.index'));
    }
}
