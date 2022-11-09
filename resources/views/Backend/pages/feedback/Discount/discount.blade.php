@extends('Backend.master')
@section('backend_content')
<div style="padding: 15px">
    <div class="d-flex justify-content-between align-items-center p-2">
        <h1 style="color: rgb(0, 89, 255)">Create Discount</h1>
        <a href="{{route('form.discount')}}" class="btn btn-success mt-5" style="margin-right: 200px">Create</a>
    </div>
    <div>
        <table class="table mt-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Product id</th>
                    <th scope="col">Product Price</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Vendors Name</th>
                    <th scope="col">Percent</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($discount as $key=>$data)
                    
            
                <tr>
                    <td scope="col">{{$key+1}}</td>
                    <td scope="col">{{$data->product_id}}</td>
                    <td scope="col">{{$data->product_price}}</td>
                    <td scope="col">{{$data->product_name}}</td>
                    <td scope="col">{{$data->vendors_name}}</td>
                    <td scope="col">{{$data->percent}}</td>
                    <td scope="col">
                        <a class="btn btn-primary" href="{{route('view.discount',$data->id)}}"><i class="fa-regular fa-eye"></i></a>
                        <a class="btn btn-success" href="{{route('edit.discount',$data->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a class="btn btn-info" href="{{route('delete.discount',$data->id)}}"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
    
        </table>
        {{$discount->links()}}
    </div>
</div>
@endsection