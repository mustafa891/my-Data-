<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\SaleStoreRequest;
use Illuminate\Support\Facades\Hash;

class CashierController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('home.cashier.index', compact('users'));
    }

    public function store(SaleStoreRequest $request)
    {
        $fields = $request->validated();

        User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'password' => Hash::make($fields['password']),
            'rule' => $fields['rule'],
        ]);

        return back()->with('success', 'User Created Successfully');
    }
}
