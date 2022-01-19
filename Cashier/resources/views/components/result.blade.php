

@foreach ($errors as $error)
<div class="alert alert-danger mt-2" role="alert">
    {{ $error }}
 </div>
@endforeach
<!--Succesfully-->
@if (session()->has('success'))
   <div class="alert alert-success mt-2" role="alert">
       {{ session('success') }}
   </div>
@endif
