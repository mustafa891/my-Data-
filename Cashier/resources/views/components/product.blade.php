<div class="row justify-content-center mt-5">
    @foreach ($products as $product)

    <div class="card text-center mx-2" style="width: 16rem;">
        @if ($product->is_debt == 1)
        <div class="is_debt text-left position-absolute" style="top: 15px; left: 5px;">
            <span class="btn btn-warning btn-sm" style="transform: rotateZ(-31deg)">Is Debt!</span>
        </div>
        @endif
        <i class="ion-cube text-success" style="font-size: 100px;"></i>
        <div class="card-body">
            <div class="d-flex flex-column text-left">
                <div class="text-center mb-2" style="width: 20px;">
                    @if ($product->type == 0)
                    {!! DNS1D::getBarcodeSVG("$product->id", 'C128',1,53,'dark', false) !!}
                     @elseif ($product->type == 1) 
                    {!! DNS2D::getBarcodeHTML("$product->id", 'QRCODE', 2,2); !!}
                    @endif
                </div>
            <small class="font-weight-bold">BARCODE : {{ $product->id }}</small>
            <small class="font-weight-bold">Product Name : {{ $product->name }}</small>
            <small class="font-weight-bold">Supplier : {{ $product->supplier->company }} </small>
            <small class="font-weight-bold">Product Price : {{ number_format($product->price, 0, '.', '.') }}</small>
            <small class="font-weight-bold">Product Count : {{ $product->count }}</small>
            <small class="font-weight-bold">Product Expire At : {{ $product->expire_date }}</small>
            <small class="font-weight-bold">Is Debt : {{ $product->is_debt == 0 ? 'No' : 'Yes' }}</small>
            </div>
            <div class="border mt-3"></div>
            <div class="btns">
                <span class="mt-2 btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{ $product->id }}"><i class="ion-edit" style="font: 25px"></i></span>
                <span class="mt-2 btn btn-danger btn-sm" onclick="Delete()"><i class="ion-trash-a"
                        style="font: 25px"></i></span>
                <form action="{{ route('.buy.destroy', $product->id) }}" id="delete" method="POST">@csrf
                    @method('DELETE')</form>
            </div>
        </div>
    </div>
     {{-- Edit Model --}}
     @include('home.buy.edit', ['product' => $product, 'suppliers' => $suppliers])
    @endforeach
</div>
