@extends('layout.app')

@section('content')
 <div class="container">
        <!--Result-->
        <x-result :errors="$errors->all()"/>
            
        <form action="{{ route('.supplier.store') }}" method="post">
            @csrf
            <div class="row mt-4 justify-content-center">
                <div class="text-center col-lg-3 col-12">
                    <label class="col-form-label text-white" for="">Company Name :</label>
                    <input class="form-control radius-20 border-0" name="company" placeholder="Company" value="{{ old('company') }}"  type="text">
                </div>

                <div class="text-center col-lg-3 col-12">
                    <label class="col-form-label text-white" for="">Email :</label>
                    <input class="form-control radius-20 border-0" name="email" placeholder="Email Adrress" value="{{ old('email') }}" type="text">
                </div>

                <div class="text-center col-lg-3 col-12">
                    <label class="col-form-label text-white" for="">Adrress :</label>
                    <input class="form-control radius-20 border-0" name="address" placeholder="Address " value="{{ old('address') }}" type="text">
                </div>

                <div class="text-center col-lg-3 col-12">
                    <label class="col-form-label text-white" for="">Phone Number :</label>
                    <input class="form-control radius-20 border-0" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" type="number">
                </div>
                
                <button class="btn btn-dark mt-4 col-4 px-4 w-100">Add</button>
            </div>
        </form>
        <x-Supplier :suppliers="$suppliers" />
 </div>

@endsection