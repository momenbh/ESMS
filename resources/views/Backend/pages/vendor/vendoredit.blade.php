@extends('Backend.master')
@section('backend_content')
<div style="padding: 20px">
    <form action="{{route('update.vendor',$vendor->id)}}" method="POST">
        @csrf
        <label for="name">Vendor Name</label>
        <input  id="name" type="text" class="form-control" name="vendor_name" value="{{$vendor->vendor_name}}">
        <label for="name">Product Name</label>
        <input  id="name" type="text" class="form-control" name="Product_name" value="{{$vendor->Product_name}}">
        <label for="address">Address</label>
        <input  id="address" type="text" class="form-control" name="address" value="{{$vendor->address}}">
        <label for="email">Email</label>
        <input  id="email" type="email" class="form-control" name="email" value="{{$vendor->email}}">
        <button type="submit" class="btn btn-primary" style="margin-top:20px">Submit</button>
    </form>
</div>
@endsection