@extends('layout.app')


@section('content')
<x-product :products="$products" :suppliers="$suppliers" />    
@endsection
