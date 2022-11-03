@extends('Backend.master')
@section('backend_content')
<label for="name">Vendor Name</label>
<input  id="name" type="text" class="form-control" value="{{$vendor->vendor_name}}" readonly>
<label for="name">Product Name</label>
<input  id="name" type="text" class="form-control" value="{{$vendor->Product_name}}" readonly>
<label for="address">Address</label>
<input  id="address" type="text" class="form-control" value="{{$vendor->address}}" readonly>
<label for="email">Email</label>
<input  id="email" type="email" class="form-control" value="{{$vendor->email}}" readonly>
@endsection