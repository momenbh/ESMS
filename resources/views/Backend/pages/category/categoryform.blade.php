@extends('Backend.master')
@section('backend_content')
<div style="padding: 20px">
    <form action="{{route('store.category')}}" method="POST">
        @csrf
        <label for="Catagory">Category Id</label>
        <input  id="catagory" type="number" class="form-control" name="category_id">
        <label for="Catagory">Category Name</label>
        <input  id="catagory" type="text" class="form-control" name="category_name">
        <button type="submit" class="btn btn-primary" style="margin-top: 10px">Create</button>
    </form>
</div>
@endsection