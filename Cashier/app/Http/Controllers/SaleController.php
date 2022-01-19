<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sold;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
{
    public function index()
    {
        return view('home.sale.index');
    }

    public function getData()
    {
        try {
            $product = Product::find(request()->id);
            if (!$product->count == 0) {
                if (!$product->expire_date <= now()) {
                    $product->count = $product->count - 1;
                    $this->Sold($product);
                    $product->save();
                    return response()->json(['message' => 'success', 'product' => $product]);
                }
                return response()->json(['message' => 'Product is expire']);
            }
            return response()->json(['message' => 'Product is not avaliable']);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $th) {
            return response()->json(['message' => 'Product not found']);
        }
    }

    public function table()
    {
        $solds = Sold::with('user')->where('user_id', auth()->id())->where('clean', 0)->get();
        return view('layout.table', compact('solds'));
    }

    public function Sold($product)
    {
        $sold = Sold::firstOrNew(['user_id' => auth()->id(), 'product_id' => $product->id]);
        $piece = $sold->piece ?? 0;
        $sold->name = $product->name;
        $sold->price_at = $product->price;
        $sold->piece = $piece + 1;
        $sold->save();
    }
}
