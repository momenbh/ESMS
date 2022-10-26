@extends('Backend.master')
@section('backend_content')
<div style="padding: 25px;display: flex; justify-content: space-between">
    <h2 style="color:rgb(0, 38, 255)">Add Product</h2>
    <a style="margin-right: 200px" href="{{route('form.product')}}"class="btn btn-success mt-5">create</a>
</div>
@endsection