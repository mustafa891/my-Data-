<div class="row justify-content-center mt-5">
    @foreach ($suppliers as $supplier)
    <div class="card text-center mx-3" style="width: 16rem;">
        <i class="text-success ion-android-bus" style="font-size: 100px"></i>
        <div class="card-body">
            <div class="d-flex flex-column">
                <small class=" font-weight-bold ">Company : {{ $supplier->company }}</small>
                <small class=" font-weight-bold mt-2">Email : {{ $supplier->email }}</small>
                <small class=" font-weight-bold mt-2">Address : {{ $supplier->address }}</small>
                <small class=" font-weight-bold mt-2">Phone Number : {{ $supplier->phone_number }}</small>
            </div>
            <div class="border mt-2"></div>
            <div class="btns">
                <span class="mt-2 btn btn-success btn-sm"><i class="ion-ios-telephone" style="font: 25px"></i></span>
                <span class="mt-2 btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#edit{{ $supplier->id }}"><i class="ion-edit" style="font: 25px"></i></span>
                <span class="mt-2 btn btn-danger btn-sm" onclick="Delete()"><i class="ion-trash-a"
                        style="font: 25px"></i></span>
                <form action="{{ route('.supplier.destroy', $supplier->id) }}" id="delete" method="POST">@csrf
                    @method('DELETE')</form>
            </div>
        </div>
    </div>
    {{-- Modle Edit Supplier --}}
    <div class="modal fade" id="edit{{ $supplier->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="{{ route('.supplier.update', $supplier->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class=" mt-4 justify-content-center">
                            <div class="text-center col">
                                <label class="col-form-label text-dark font-weight-bold" for="">Company Name :</label>
                                <input class="form-control radius-20 " name="company" placeholder="Company" value="{{ $supplier->company }}" type="text">
                            </div>
            
                            <div class="text-center col">
                                <label class="col-form-label text-dark font-weight-bold" for="">Email :</label>
                                <input class="form-control radius-20 " name="email" placeholder="Email Adrress" value="{{ $supplier->email }}" type="text">
                            </div>
            
                            <div class="text-center col">
                                <label class="col-form-label text-dark font-weight-bold" for="">Adrress :</label>
                                <input class="form-control radius-20 " name="address" placeholder="Address" value="{{ $supplier->address }}" type="text">
                            </div>
            
                            <div class="text-center col">
                                <label class="col-form-label text-dark font-weight-bold" for="">Phone Number :</label>
                                <input class="form-control radius-20 " name="phone_number" placeholder="Phone Number" value="{{ $supplier->phone_number }}" type="number">
                            </div>
                            
                            <button class="btn btn-dark mt-4 col-4 px-4 w-100">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
