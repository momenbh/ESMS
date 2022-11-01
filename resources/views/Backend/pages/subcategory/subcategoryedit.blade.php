@extends('Backend.master')
@section('backend_content')
<div style="padding: 15px">
    <form action="{{route('update.subcategory',$subcategory->id)}}" method="POST">
        @csrf
        <label for="subcategory">Subcategory Id</label>
        <input  id="subcategory" type="number" class="form-control" name="subcategory_id" value="{{$subcategory->subcategory_id}}">
        <label for="subcategory">Subcategory  Name</label>
        <input  id="subcategory" type="text" class="form-control" name="subcategory_name" value="{{$subcategory->subcategory_name}}">
        <button type="submit" class="btn btn-success" style="margin-top: 10px">Create</button>
    </form>
</div>

@endsection