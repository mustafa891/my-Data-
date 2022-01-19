<div class="row justify-content-center mt-5">
    @foreach ($users as $user)
    <div class="card text-center mx-3" style="width: 14rem;">
        <i class="text-success ion-ios-person" style="font-size: 100px"></i>
        <div class="card-body">
            <div class="d-flex flex-column">
            <small>Name  : {{ $user->name }}</small>
            <small>Email : {{ $user->email }}</small>
            <small>Rule : {{ $user->rule == 0 ? 'Cashier' : 'Admin'}}</small>
            </div>
        </div>
    </div>
    @endforeach
</div>