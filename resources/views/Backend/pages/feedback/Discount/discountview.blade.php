@extends('Backend.master')
@section('backend_content')
<label for="product">Product id</label>
<input id="product" type="number" class="form-control" value="{{$discount->product_id}}" readonly>
<label for="product">Product Price</label>
<input id="product" type="number" class="form-control" value="{{$discount->product_price}}" readonly>
<label for="name">Product Name</label>
<input id="name" type="text" class="form-control" value="{{$discount->product_name}}" readonly>
<label for="brands">Vendors Name</label>
<input id="brands" type="text" class="form-control" value="{{$discount->vendors_name}}" readonly>
<label for="percent">Percent</label>
<input id="percent" type="number" class="form-control" value="{{$discount->percent}}" readonly>
@endsection