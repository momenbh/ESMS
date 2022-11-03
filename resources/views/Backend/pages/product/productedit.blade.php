@extends('Backend.master')
@section('backend_content')
<div style="padding: 20px">
    <form action="{{route('store.product')}}" method="POST">
        @csrf
        <label for="product">Product id</label>
        <input id="product" type="number" class="form-control" name="product_id" value={{$product->product_id}}>
        <label for="name">Product Name</label>
        <input id="name" type="text" class="form-control" name="product_name" value="{{$product->product_name}}">
        <label for="brands">Brands</label>
        <input id="brands" type="text" class="form-control" name="brands" value="{{$product->brands}}">
        <label for="stock">Stock Status</label>
        <input id="stock" type="text" class="form-control" name="stock_status" value="{{$product->stock_status}}   ">
        <label for="wranty">Product wranty</label>
        <input id="wranty" type="number" class="form-control" name="product_wranty" value="{{$product->product_wranty}}">
        <label for="image">Product wranty</label>
        <input id="image" type="file" class="form-control" name="image" value=""{{$product->image}}>
        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
    </form>
</div>
@endsection