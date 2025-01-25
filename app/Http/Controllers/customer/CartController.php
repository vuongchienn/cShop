<?php

namespace App\Http\Controllers\customer;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Support\Facades\View;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productInCarts= User::find(Auth::user()->id)->cartProducts;
        View::share('productInCarts', $productInCarts);
        return view("customer.shopping-cart",["productInCarts"=>$productInCarts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $product_id = $request->product_id;
        $quantity = $request->quantity;
        Cart::create([
            "user_id"=> $user_id,
            "product_id"=> $product_id,
            "quantity"=> $quantity
        ]);
        return redirect()->route("products.index")->with("success","Product added to cart succcessfully !");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user_id = Auth::user()->id;
        $cart = Cart::where('user_id',$user_id)->where('product_id', $id)->first();
        $cart->delete();
        return back()->with('success','Product removed from the cart succcessfully !');
    }
}
