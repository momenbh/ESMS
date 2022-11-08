@extends('Backend.master')
@section('backend_content')
<div style="padding: 20px">
    <form action="{{route('store.product')}}" method="POST">

        @if ($errors->any())
        @foreach ($errors->all() as $message)
            <p class="alert alert-danger">{{ $message }}</p>
        @endforeach
        @endif


        @csrf
        <label for="product">Product id</label>
        <input id="product" type="number" class="form-control" name="product_id" required>
        <label for="name">Product Name</label>
        <input id="name" type="text" class="form-control" name="product_name" required>
        <label for="brands">Brands</label>
        <input id="brands" type="text" class="form-control" name="brands" required>
        <label for="stock">Stock Status</label>
        <input id="stock" type="text" class="form-control" name="stock_status" required>
        <label for="wranty">Product wranty</label>
        <input id="wranty" type="number" class="form-control" name="product_wranty" required>
        <label for="image">Product wranty</label>
        <input id="image" type="file" class="form-control" name="image" >
        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
    </form>
</div>
@endsection