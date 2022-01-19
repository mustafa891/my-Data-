<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SimpleController extends Controller
{
    public function NoLeft()
    {
        $products = Product::where('count', '<', 2)->get();
        $suppliers  = Supplier::all();
        return view('home.noleft.index', compact('products', 'suppliers'));
    }

    public function DebtList()
    {
        $products = Product::IsDebt();
        $suppliers  = Supplier::all();
        return view('home.debt-list.index', compact('products', 'suppliers'));
    }

    public function expire()
    {
        $products = Product::Expire();
        $suppliers  = Supplier::all();
        return view('home.expire.index', compact('products', 'suppliers'));
    }
}
