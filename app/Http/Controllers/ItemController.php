<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Items;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function viewHome()
    {
        $items= Item::paginate(10);
        return view('home', compact('items'));
    }

    public function viewItemDetail($itemdetail)
    {
        $items = Item::where('id', $itemdetail)->first();
        return view('itemdetail', compact('items'));
    }

    public function buyItem(Request $request)
    {
        Auth::user();
        $items = Item::find($request->id);

        Order::insert([
            'users_id' => Auth::id(),
            'items_id' => $items->id,
            'price' => $items->price
        ]);

        return redirect("/Cart");
    }

}
