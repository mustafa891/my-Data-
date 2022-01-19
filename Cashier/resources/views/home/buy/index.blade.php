@extends('layout.app')

@section('content')
<div class="container">

    <!--Result-->
    <x-result :errors="$errors->all()" />

    <form action="{{ route('.buy.store') }}" method="post">
        @csrf
        <div class="row mt-4 justify-content-center">

            <div class="text-center col-lg-4 col-12">
                <label class="col-form-label text-white" for="">Type :</label>
                <select class="form-control radius-20" name="type">
                    <option value="0">BARCODE</option>
                    <option value="1">QRCODE</option>
                </select>
            </div>

            <div class="text-center col-lg-4 col-12">
                <label class="col-form-label text-white" for="">BarCode :</label>
                <input class="form-control radius-20 border-0" name="id" placeholder="BarCode" type="number">
            </div>

            <div class="text-center col-lg-4 col-12">
                <label class="col-form-label    text-white" for="">Name :</label>
                <input class="form-control radius-20 border-0" name="name" placeholder="Name" type="text">
            </div>

            <div class="text-center col-lg-4 col-12">
                <label class="col-form-label text-white" for="">Supplier :</label>
                <select class="form-control" name="supplier_id">
                    @foreach ($suppliers as $supplier)
                    <option value="{{ $supplier->id }}">{{ $supplier->company }}</option>
                    @endforeach
                </select>
            </div>

            <div class="text-center col-lg-4 col-12">
                <label class="col-form-label text-white" for="">Count :</label>
                <input class="form-control radius-20 border-0" name="count" placeholder="Count" type="number">
            </div>

            <div class="text-center col-lg-4 col-12">
                <label class="col-form-label text-white" for="">Price :</label>
                <input class="form-control radius-20 border-0" name="price" placeholder="Price" type="number">
            </div>

            <div class="text-center col-lg-4 col-12">
                <label class="col-form-label text-white" for="">Is Debt ? :</label>
                <select class="form-control" name="is_debt">
                    <option value="0" selected>No</option>
                    <option value="1">Yes</option>
                </select>
            </div>

            <div class="text-center col-lg-4 col-12">
                <label class="col-form-label text-white" for="">Expire Date :</label>
                <input class="form-control radius-20 border-0" name="expire_date" placeholder="Expire Date" type="date">
            </div>
        </div>
        <div class="text-center">
        <button class="btn btn-white mt-4 px-4">Create</button>
        </div>
    </form>

    <x-product :products="$products" :suppliers="$suppliers" />

</div>

@endsection
