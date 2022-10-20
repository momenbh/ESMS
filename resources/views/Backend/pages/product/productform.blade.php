@extends('Backend.master')
@section('backend_content')
<div style="padding: 20px">
    <form action="{{route('store.product')}}" method="POST">
        @csrf
        <label for="">Product id</label>
        <input id="" type="number" class="form-control" name="product_id">
        <label for="name">Product Name</label>
        <input id="name" type="text" class="form-control" name="product_name">
        <label for="">Stock Status</label>
        <input id="" type="text" class="form-control" name="stock_status">
        <label for="">Product wranty</label>
        <input id="" type="number" class="form-control" name="product_wranty">
        <label for="">Image</label>
        <input id="" type="file" class="form-control" name="image">
        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Create</button>
    </form>
</div>
@endsection