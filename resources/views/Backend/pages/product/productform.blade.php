@extends('Backend.master')
@section('backend_content')
<div style="padding: 20px">
    <form action="{{route('store.product')}}" method="POST" enctype="multipart/form-data">

        @if ($errors->any())
        @foreach ($errors->all() as $message)
            <p class="alert alert-danger">{{ $message }}</p>
        @endforeach
        @endif


        @csrf

        <label for="name">Product Name</label>
        <input id="name" type="text" class="form-control" name="product_name" required>
        <label for="price">Product price</label>
        <input id="price" type="numer" class="form-control" name="product_price" required>
        <label for="brands">Brands</label>
        <input id="brands" type="text" class="form-control" name="brands" required>
        <label for="stock">Stock Status</label>
        <input id="stock" type="text" class="form-control" name="stock_status" required>
        <label for="wranty">Product wranty</label>
        <input id="wranty" type="number" class="form-control" name="product_wranty" required>
        <div class="form-group">
            <label for="category">Select Category</label>
            <select name="category_id" id="category" class="form-control" required>
                @foreach($category  as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
                @endforeach
            </select>
        </div>
        <label for="image">Image</label>
        <input id="image" type="file" class="form-control" name="image" required>
        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
    </form>
</div>
@endsection