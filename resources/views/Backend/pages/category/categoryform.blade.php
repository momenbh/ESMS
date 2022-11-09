@extends('Backend.master')
@section('backend_content')
<div style="padding: 20px">
    <form action="{{route('store.category')}}" method="POST">

        @if ($errors->any())
            @foreach ($errors->all() as $message)
                <p class="alert alert-danger">{{ $message }}</p>
            @endforeach
            @endif
    </div>

        @csrf
       
            <label for="name">Category Name</label>
            <input id="name" name="category_name" type="text" class="form-control" required  >
            <label for="description">Description</label>
            <textarea  id="description"class="form-control" name="description" required></textarea>
        <div class="form-group">
            <label for="status">Select Status</label>
            <select name="status" id="status" class="form-control">
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
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