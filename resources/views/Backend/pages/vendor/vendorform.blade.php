@extends('Backend.master')
@section('backend_content')
<div style="padding: 20px">
    <form action="{{route('store.vendor')}}" method="POST">

        @if ($errors->any())
        @foreach ($errors->all() as $message)
            <p class="alert alert-danger">{{ $message }}</p>
        @endforeach
        @endif

        @csrf
        <label for="name">Vendor Name</label>
        <input  id="name" type="text" class="form-control" name="vendor_name" required>
        <label for="name">Product Name</label>
        <input  id="name" type="text" class="form-control" name="Product_name" required>
        <label for="address">Address</label>
        <input  id="address" type="text" class="form-control" name="address" required>
        <label for="email">Email</label>
        <input  id="email" type="email" class="form-control" name="email" required>
        <button type="submit" class="btn btn-primary" style="margin-top:20px">Submit</button>
    </form>
</div>
@endsection