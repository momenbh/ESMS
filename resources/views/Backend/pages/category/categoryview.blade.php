@extends('Backend.master')
@section('backend_content')
<label for="Catagory">Category Id</label>
<input  id="catagory" type="number" class="form-control" value="{{ $category->category_id}}" readonly>
<label for="Catagory">Category Name</label>
<input  id="catagory" type="text" class="form-control" value="{{$category->category_name}}" readonly>
@endsection