<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Stock;
use App\Model\Wishlist;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class CartController extends Controller
{
    public function add_cart(Request $request)
    {
//        dd($request->all());
        $validator = Validator::make($request->all(), [
            'color' => 'required',
            'quantity' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()->all()
            ]);
        }
        $product = Product::where('id', $request->product_id)->first();

        $cartItem = Cart::add([
            'id' => $request->product_id,
            'name' => $product->product_name,
            'qty' => (int)$request->quantity,
            'price' => $product->discount_price,
            'options' =>
                [
                    'image' => $product->images->where('is_main', '=', 1)->first()->image,
                    'color' => $request->color,
                    'size' => $request->size
                ],
        ]);

//       dd(Cart::content());

        return response()->json(['status' => 'success', 'message' => 'Successfully added to Cart ', 'cart' => Cart::content()]);
    }

    public function cart_item()
    {
        $cartItem = Cart::content();

        return view('frontend/pages/cart-page', compact('cartItem'));
    }

    public function cart_remove(Request $request)
    {
        $rowId = $request->id;
        Cart::remove($rowId);
        return back()->with('success', 'Item removed from cart');
    }

    public function cart_update(Request $request)
    {
        $id = $request->id;
        $quantity = $request->quantity;
        for ($i = 0; $i < count($quantity); $i++) {
            Cart::update($id[$i], $quantity[$i]);
        }
        return back()->with('success', 'Cart updated successfully');
    }

    public function cart_filter(Request $request)
    {
        if ($request->ajax()) {
            if ($request->free_size) {
                $color_name = $request->color;
                $size_name = $request->free_size;


                $stock = Stock::leftjoin('colors', 'colors.id', '=', 'stocks.color_id')
                    ->leftjoin('sizes', 'sizes.id', '=', 'stocks.size_id')
                    ->where('sizes.title', $size_name)
                    ->where('colors.title', $color_name)
                    ->where('product_id', $request->product_id)
                    ->first();
                $value = $stock ? $stock->stock : 0;
            } else {
                $color_name = $request->color;
                $stock = DB::table('color_stocks')->leftJoin('colors', 'colors.id', '=', 'color_stocks.color_id')
                    ->where('colors.title', $color_name)
                    ->where('product_id', $request->product_id)
                    ->first();
                $value = $stock ? $stock->stock : 0;

            }
        }

        return response()->json(['stock_amount' => $value], 200);
    }

    public function show_wishlist(Request $request)
    {
        if ($request->isMethod('get')) {
            if (Auth::check()){
                $wishlist = Wishlist::all();
                return view('frontend/pages/account-wishlist', compact('wishlist'));
            }
            else{
                return back()->with('error','Please login first');
            }

        }

        if (Auth::check()) {
            if ($request->ajax()) {
                $list = new Wishlist();
                $list->user_id = Auth::user()->id;
                $list->product_id = $request->product_id;
                $list->save();
                return response()->json(['status' => 'success', 'message' => 'Added to Wishlist']);
            }
        } else {
            return response()->json(['status' => 'error', 'message' => 'Please login first']);
        }

    }

    public function delete_wishlist(Request $request)
    {
        $find = Wishlist::findorfail($request->id);
        $find->delete();
        return back()->with('success', 'Item removed from wishlist');
    }

}
