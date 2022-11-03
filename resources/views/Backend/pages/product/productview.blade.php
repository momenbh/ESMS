@extends('Backend.master')
@section('backend_content')
       <label for="product">Product id</label>
        <input id="product" type="number" class="form-control" value="{{ $product->product_id}}" readonly>
        <label for="name">Product Name</label>
        <input id="name" type="text" class="form-control" value="{{ $product->product_name}}" readonly>
        <label for="brands">Brands</label>
        <input id="brands" type="text" class="form-control" value="{{ $product->brands}}" readonly>
        <label for="stock">Stock Status</label>
        <input id="stock" type="text" class="form-control" value="{{ $product->stock_status}}" readonly>
        <label for="wranty">Product wranty</label>
        <input id="wranty" type="number" class="form-control" value="{{ $product->product_wranty}}" readonly>
        <label for="image">Image</label>
        <input id="image" type="file" class="form-control" value="{{ $product->image}}" readonly>
@endsection