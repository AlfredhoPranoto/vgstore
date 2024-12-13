<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function cart()
    {
        $total = 0;
        $cart = Cart::where('user_id', Auth::id())->with('products')->get();

        foreach ($cart as $item) {
            $price = $item->products->sale_price * $item->quantity;
            $total += $price;
        }

        $total = number_format($total, 0, ',', '.');

        return view('cart.cart', compact(['cart', 'total']));
    }

    public function addCart($id, Request $request)
    {
        $product = Product::findOrFail($id);
        $cart = Cart::where('user_id', Auth::id())->where('product_id', $id)->first();
        if ($product->stock == 0) return redirect()->back()->with('message', 'No Stock');

        $quantity = 1;

        if ($request->quantity > 1) {
            $quantity = $request->quantity;
        }

        if (!isset($cart)) {
            $cart = Cart::create([
                'product_id' => $product->id,
                'quantity' => $quantity,
                'user_id' => Auth::id()
            ]);
        } else {
            if($request->quantity == 0){

                $cart->delete();
            }

            if($request->quantity > $product->stock){
                return redirect()->back()->with('error','Stock is unavailable');
            }
            $cart->update(['quantity' => $request->quantity]);
        }

        Session::flash('success', 'success');
        Session::flash('message', 'Product add to cart successfully');


        return redirect()->back();
    }

    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);

        $cart->delete();

        return redirect(route('cart'));
    }

    public function checkout()
    {
        $total = 0;
        $cart = Cart::where('user_id', Auth::id())->with('products')->get();

        foreach ($cart as $item) {
            $price = $item->products->sale_price * $item->quantity;
            $total += $price;

            $product = Product::findOrFail($item->product_id);

            if (!$product || $product->stock < $item->quantity) {
                return redirect()->back()->with('message', 'No Stock');
            }
        }

        DB::transaction(function() use ($total,$cart){
            $transaction = Transaction::create([
                'user_id' => Auth::id(),
                'total_price' => $total
            ]);
    
            foreach ($cart as $item) {
                $transaction->products()->attach(
                    $item->product_id,
                    [
                        'quantity' => $item->quantity,
                        'price' => $item->products->sale_price
                    ]
                );
                Product::findOrFail($item->product_id)->decrement('stock',$item->quantity);
            }
    
            Cart::where('user_id', Auth::id())->delete();
            
        });


        return redirect()->back();
    }
}
