<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function showCart()
    {
        $items = Order::where('users_id', "=", Auth::id())->get();
        $total = 0;
        foreach($items as $item)
        {
            $total += $item->price;
        }

        return view('cart', compact('total', 'items'));
    }

    public function removeCart(Request $request)
    {
        $user = Auth::user();
        $item = Item::find($request->id);

        $order = Order::where([['users_id', '=', $user->id],
                               ['items_id', '=', $item->id]])->first();

        $order->delete();

        return redirect()->back()->with('Cart Removed!', 'Cart Removed!');
    }

    public function checkOut()
    {
        $items = Order::where('users_id', "=", Auth::id())->delete();


        return view('checkout');
    }
}
