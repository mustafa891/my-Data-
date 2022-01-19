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
          <td>
            @if ($sold->product->type == 0)
          {!! DNS1D::getBarcodeSVG("$sold->product_id", 'C128',1,24,'dark', false) !!}
          @elseif ($sold->product->type == 1) 
          {!! DNS2D::getBarcodeHTML("$sold->product_id", 'QRCODE', 1,1) !!}
          @endif
          </td>
          <td>{{ $sold->name }}</td>
          <td>{{ number_format($sold->price_at, 0, '.', '.') }}</td>
          <td>{{ $sold->created_at }}</td>
          <td class="btn btn-dark btn-sm py-2 mt-1">{{ $sold->piece }}</td>
        </tr>
      @endforeach
    
  </tbody>
</table>

