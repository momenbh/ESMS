@extends('Backend.master')
@section('backend_content')
<div style="padding: 25px;display: flex; justify-content: space-between">
    <h2 style="color:rgb(0, 38, 255)">Add Product</h2>
    <a style="margin-right: 200px" href="{{route('form.product')}}"class="btn btn-success mt-5">create</a>
</div>
<div style="padding: 15px">
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Product Name</th>
            <th scope="col">product price</th>
            <th scope="col">Brands</th>
            <th scope="col">Stock Status</th>
            <th scope="col">Category Name</th>
            <th scope="col">Product wranty</th>
            <th scope="col">Image</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($product as $key=>$data )
                
           
            <tr>
                <td scope="col">{{$key+1}}</td>
                <td scope="col">{{$data->product_name}}</td>
                <td scope="col">{{$data->product_price}}BDT</td>
                <td scope="col">{{$data->brands}}</td>
                <td scope="col">{{$data->stock_status}}</td>
                <td scope="col">{{$data->categoryrelation->name}}</td>
                <td scope="col">{{$data->product_wranty}}</td>
                <td scope="col">
                            
                    <img width="100px" style="border-radius: 10px" src="{{url('/uploads/'.$data->image)}}" alt="product_image">
                </td>

                    </td>
                <td scope="col">
                    <a class="btn btn-primary" href="{{route('view.product',$data->id)}}"><i class="fa-regular fa-eye"></i></a>
                    <a class="btn btn-success" href="{{route('edit.product',$data->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a class="btn btn-info" href="{{route('delete.product',$data->id)}}"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
{{$product->links()}}
@endsection