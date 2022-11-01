@extends('Backend.master')
@section('backend_content')
       <div>
        <label for="subcategory">Subcategory Id</label>
        <input  id="subcategory" type="number" class="form-control" value="{{$subcategory->subcategory_id}}" readonly>
        <label for="subcategory">Subcategory  Name</label>
        <input  id="subcategory" type="text" class="form-control" value="{{$subcategory->subcategory_name}}" readonly>
       </div>
@endsection