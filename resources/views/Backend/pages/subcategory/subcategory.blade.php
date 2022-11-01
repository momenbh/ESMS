@extends('Backend.master')
@section('backend_content')
<div class="d-flex justify-content-between align-items-center p-2">
    <h1 style="color:blue">Add Subcategory</h1>
    <a href="{{route('form.subcategory')}}" class="btn btn-success mt-5" style="margin-right:200px">Create</a>
</div>
<div style="padding:20px">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Subcategory Id</th>
                <th scope="col">Subcategory  Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subcategory as $key=>$data )
                
         
            <tr>
                <td scope="col">{{$key+1}}</td>
                <td scope="col">{{$data->subcategory_id}}</td>
                <td scope="col">{{$data->subcategory_name}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('view.subcategory',$data->id)}}"><i class="fa-regular fa-eye"></i></a>
                    <a class="btn btn-success" href="{{route('edit.subcategory',$data->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a class="btn btn-info" href="{{route('delete.subcategory',$data->id)}}"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
    {{$subcategory->links()}}
</div>
@endsection