<!--Model Edit-->
<div class="modal fade" id="edit{{ $product->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{ route('.buy.update', $product->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class=" mt-4 justify-content-center">


                        <div class="text-center col">
                            <label class="col-form-label text-dark font-weight-bold" for="">Type :</label>
                            <select class="form-control radius-20" name="type">
                                <option value="0" {{ $product->type == 0 ? 'selected' : '' }}>BARCODE</option>
                                <option value="1" {{ $product->type == 1 ? 'selected' : '' }}>QRCODE</option>
                            </select>
                        </div>

                        <div class="text-center col">
                            <label class="col-form-label text-dark font-weight-bold" for="">BARCODE :</label>
                            <input class="form-control radius-20 " name="id" placeholder="id" value="{{ $product->id }}" type="text">
                        </div>

                        <div class="text-center col">
                            <label class="col-form-label text-dark font-weight-bold" for="">Product Name :</label>
                            <input class="form-control radius-20 " name="name" placeholder="Name" value="{{ $product->name }}" type="text">
                        </div>
  
  
                        <div class="text-center col">
                            <label class="col-form-label text-dark font-weight-bold" for="">Supplier :</label>
                            <select class="form-control" name="supplier_id">
                                @foreach ($suppliers as $supplier)
                                <option value="{{ $supplier->id }}" {{ $supplier->id == $product->supplier->id ? 'selected' : '' }} >{{ $supplier->company }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="text-center col">
                            <label class="col-form-label text-dark font-weight-bold" for="">Product Count :</label>
                            <input class="form-control radius-20 " name="count" placeholder="Count" value="{{ $product->count }}" type="number">
                        </div>

                        <div class="text-center col">
                            <label class="col-form-label text-dark font-weight-bold" for="">Product Price :</label>
                            <input class="form-control radius-20 " name="price" placeholder="Count" value="{{ $product->price }}" type="number">
                        </div>

                        <div class="text-center col">
                            <label class="col-form-label text-dark font-weight-bold" for="">Expire Date :</label>
                            <input class="form-control radius-20 " name="expire_date" placeholder="Expire date" value="{{ $product->expire_date }}" type="date">
                        </div>

                        <div class="text-center col">
                            <label class="col-form-label text-dark font-weight-bold" for="">Is Debt ?</label>
                            <select class="form-control" name="is_debt">
                                <option value="0" {{ $product->is_debt == 0 ? 'selected' : '' }}>No</option>
                                <option value="1" {{ $product->is_debt == 1 ? 'selected' : '' }}>Yes</option>
                            </select>
                        </div>
                        
                        <button class="btn btn-dark mt-4 col-4 px-4 w-100">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>