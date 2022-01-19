<?php

namespace App\Http\Controllers;

use App\Models\Sold;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function index()
    {
        $solds = Sold::with('user')->Clean();
        $AllMoney = Sold::all()->sum('price_at');
        $todayMoney = Sold::Today()->sum('price_at');
        return view('home.sellers.index', compact('solds', 'AllMoney', 'todayMoney'));
    }
}
