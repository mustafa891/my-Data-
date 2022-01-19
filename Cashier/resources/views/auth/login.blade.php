@extends('layout.app')

@section('content')

<div class="container">
    <div class="row justify-content-center ">
        <div class="col-md-7 p-5">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('images/teammart.jpg') }}" style="width: 200px;">
                    </div>
                    <form action="{{ route('login') }}" method="post" class="px-5">
                        @csrf
                        <div class="form-group ">
                            <label for="email">Email Adrress :</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group ">
                            <label for="email">Password :</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <button class="btn btn-dark w-100">login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
