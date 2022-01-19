<?php

namespace App\Http\Controllers;

use App\Http\Requests\SuppliersStoreRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view('home.supplier.index', compact('suppliers'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SuppliersStoreRequest $request)
    {
        $fields = $request->validated();

        Supplier::create([
            'company' =>  $fields['company'],
            'email' =>  $fields['email'],
            'address' =>  $fields['address'],
            'phone_number' =>  $fields['phone_number'],
        ]);

        return back()->with('success', 'SuccessFully Data Created');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SuppliersStoreRequest $request, Supplier $supplier)
    {
        $fields = $request->validated();
        $supplier->update($fields);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Supplier::destroy($id);
        return back();
    }
}
