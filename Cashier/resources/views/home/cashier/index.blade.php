@extends('layout.app')

@section('content')
 <div class="container">
    <!--Result-->
    <x-result :errors="$errors->all()"/>
        
    <form action="{{ route('.cashier.store') }}" method="post">
        @csrf
        <div class="row mt-4 justify-content-center">
            <div class="text-center col-lg-3 col-12">
                <label class="col-form-label text-white" for="">Name :</label>
                <input class="form-control radius-20 border-0" name="name" placeholder="Name" type="text">
            </div>

            <div class="text-center col-lg-3 col-12">
                <label class="col-form-label text-white" for="">Email Address :</label>
                <input class="form-control radius-20 border-0" name="email" placeholder="Email Adrress" type="text">
            </div>

            <div class="text-center col-lg-3 col-12">
                <label class="col-form-label text-white" for="">Password :</label>
                <input class="form-control radius-20 border-0" name="password" placeholder="Password" type="password">
            </div>

            <div class="text-center col-lg-3 col-12">
                <label class="col-form-label text-white" for="">Rule :</label>
                <select class="form-control" name="rule" >
                    <option value="0" selected>Cashier</option>
                    <option value="1">Admin</option>
                </select>
            </div> 
            <button class="btn btn-white mt-4 px-4">Create</button>
        </div>
    </form>

     <x-users :users="$users"/>

 </div>

@endsection