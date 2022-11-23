@extends('Backend.master')
@section('backend_content')
<div style="padding: 20px">
    <form action="{{route('update.category',$category->id)}}" method="POST"enctype="multipart/form-data">
        @csrf
        <label for="name">Category Name</label>
        <input id="name" name="category_name" type="text" class="form-control" value="{{$category->name}}" >
        <label for="description">Description</label>
        <textarea  id="description"class="form-control" name="description">{{$category->description}}</textarea>
        <div class="form-group">
            <label for="">Select Status</label>
            <select name="status" id="" class="form-control">
                
                <option @if($category->status=='active') selected @endif value="active">Active</option>
                <option @if($category->status=='inactive') selected @endif value="inactive">Inactive</option>
            </select>
        </div>

    <div class="form-group">
        <label for="image">Upload Image</label>
        <input id="image" type="file" class="form-control"  name="image">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection