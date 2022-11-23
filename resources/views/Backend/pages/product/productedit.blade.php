@extends('Backend.master')
@section('backend_content')
<div style="padding: 20px">
    <form action="{{route('update.product',$product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="price">Product price</label>
        <input id="price" type="numer" class="form-control" name="product_price" value="{{$product->product_price}}">
        <label for="name">Product Name</label>
        <input id="name" type="text" class="form-control" name="product_name" value="{{$product->product_name}}">
        <label for="brands">Brands</label>
        <input id="brands" type="text" class="form-control" name="brands" value="{{$product->brands}}">
        <label for="stock">Stock Status</label>
        <input id="stock" type="text" class="form-control" name="stock_status" value="{{$product->stock_status}}">
        <div class="form-group">
            <label for="category">Select Category</label>
            <select name="category_id" id="category" class="form-control" required>
                @foreach($category  as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
            </select>
        </div>
        <label for="wranty">Product wranty</label>
        <input id="wranty" type="number" class="form-control" name="product_wranty" value="{{$product->product_wranty}}">
        <label for="image">Image</label>
        <input id="image" type="file" class="form-control" name="image" value="{{$product->image}}">
        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
    </form>
</div>
@endsection