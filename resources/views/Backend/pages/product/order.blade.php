@extends('Backend.master')
@section('backend_content')
<div class="d-flex justify-content-between align-items-center p-2">
    <h1 style="color: blue" >Add Order</h1>
    <a href="{{route('form.oredr')}}"class="btn btn-success mt-5" style="margin-right: 200px">create</a>
</div>
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Total price</th>
                <th scope="col">Total Discount</th>
                <th scope="col">Total Vat</th>
                <th scope="col">Total Payable</th>
                <th scope="col">SellBy</th>
                <th scope="col">Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($order as $key=>$data)
            
            <tr>
                <td scope="col">{{$key+1}}</td>
                <td scope="col">{{$data->orderrelation->product_name}}</td>
                <td scope="col">{{$data->total_price}}</td>
                <td scope="col">{{$data->total_discount}}</td>
                <td scope="col">{{$data->total_vat}}</td>
                <td scope="col">{{$data->total_payable}}</td>
                <td scope="col">{{$data->sell_by}}</td>
                <td scope="col">
                    <a class="btn btn-primary" href="{{route('view.order',$data->id)}}"><i class="fa-regular fa-eye"></i></a>
                    <a class="btn btn-success" href="{{route('edit.order',$data->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a class="btn btn-info" href="{{route('delete.order',$data->id)}}"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
{{$order->links()}}
@endsection