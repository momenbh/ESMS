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
        <label for="Catagory">Category Id</label>
        <input  id="catagory" type="number" class="form-control" name="category_id" required>
        <label for="Catagory">Category Name</label>
        <input  id="catagory" type="text" class="form-control" name="category_name" required>
        <button type="submit" class="btn btn-success" style="margin-top: 10px">Create</button>
    </form>
</div>
@endsection