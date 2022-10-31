@extends('Backend.master')
@section('backend_content')
<div style="padding: 20px">
    <form action="{{route('store.discount')}}" method="POST">
        @csrf
        <label for="product">Product id</label>
        <input id="product" type="number" class="form-control" name="product_id">
        <label for="product">Product Price</label>
        <input id="product" type="number" class="form-control" name="product_price">
        <label for="name">Product Name</label>
        <input id="name" type="text" class="form-control" name="product_name">
        <label for="brands">Vendors Name</label>
        <input id="brands" type="text" class="form-control" name="vendors_name">
        <label for="percent">Percent</label>
        <input id="percent" type="number" class="form-control" name="percent">
        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
    </form>
</div>
@endsection