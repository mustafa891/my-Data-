@extends('layout.app')

@section('content')
<div class="container">
    <div class="details mt-3">
        <button class="btn btn-outline-white radius-10">All Money : {{ $AllMoney }}</button>
        <button class="btn btn-outline-white radius-10">Today Money : {{ $todayMoney }}</button>
    </div>
    <table class="table table-responsive-sm bg-secondary text-center radius-20  mt-3">
        <thead>
          <tr>
            <th scope="col">Cashier</th>
            <th scope="col">BARCODE</th>
            <th scope="col">Name</th>
            <th scope="col">Price At</th>
            <th scope="col">Created At</th>
            <th scope="col">Piece</th>
          </tr>
        </thead>
        <tbody>
         
            @foreach ($solds as $sold )
            <tr>
                <td>{{ $sold->user->name }}</td>
                <td>{{ $sold->id }}</td>
                <td>{{ $sold->name }}</td>
                <td>{{ number_format($product->price, 0, '.', '.') }}</td>
                <td>{{ $sold->created_at }}</td>
                <td class="btn btn-dark btn-sm py-2 mt-1">{{ $sold->piece }}</td>
              </tr>
            @endforeach
          
        </tbody>
      </table>
</div>
@endsection