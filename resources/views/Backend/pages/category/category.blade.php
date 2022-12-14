@extends('Backend.master')
@section('backend_content')
<div class="d-flex justify-content-between align-items-center p-2">
    <h1 style="color:blue">Add Category</h1>
    <a href="{{route('form.category')}}" class="btn btn-success mt-5" style="margin-right:200px">Create</a>
</div>
<div style="padding: 20px">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Category Name</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $category as $key=>$data)
                
            {{-- @dd($data->image) --}}
            <tr>
                <td scope="col">{{$key+1}}</td>
                <td scope="col">{{$data->name}}</td>
                <td scope="col">{{$data->description}}</td>
                <td scope="col">{{$data->status}}</td>
                <td scope="col">
                    
                    <img  width="100px" stule="border-radius: 10px" src="{{url('/uploads/category/'.$data->image)}}" alt="category">
                </td>
                
                <td >
                    <a class="btn btn-primary" href="{{route('view.category',$data->id)}}"><i class="fa-regular fa-eye"></i></a>
                    <a class="btn btn-success" href="{{route('edit.category',$data->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a class="btn btn-info" href="{{route('delete.category',$data->id)}}"><i class="fa-solid fa-trash"></i></a>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{$category->links()}}
</div>
@endsection