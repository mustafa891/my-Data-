@extends('layout.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">
            
            <div class="col-lg-4 col-12 pt-5 text-center">
                <canvas width="320" height="240" id="webcodecam-canvas"></canvas>
                <div id="message" class="text-center text-danger"></div>
                <div class="btns d-flex ">
                    <input type="hidden" id="token" value="{{ csrf_token() }}">
                    <select class="form-control  mt-2" id="camera-select"></select>
                    <button title="Play" class="btn btn-dark btn-sm mt-2 px-3 mx-2" id="play" type="button" data-toggle="tooltip">Play</button>
                </div>
            </div>

            <div class="col-lg-4 text-center col-12">
                <h1>Invoice</h1>
            </div>

            <div class="tb">
                
            </div>

        </div>

    </div>
@endsection