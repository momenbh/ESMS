@extends('Backend.master')
@section('backend_content')
<div class="d-flex justify-content-between align-items-center p-2">
    <h1 style="color: blue" >Create Report</h1>
    <a href="{{route('form.report')}}"class="btn btn-success mt-5" style="margin-right: 200px">create</a>
</div>
<div style="padding: 15px">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Order Id</th>
                <th scope="col">Email</th>
                <th scope="col">Date</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Quantity</th>
                <th scope="col">Product Price</th>
                <th scope="col">Total Amount</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($report as $key=>$data)
            <tr>
                <td scope="col">{{$key+1}}</td>
                <td scope="col">{{$data->order_id}}</td>
                <td scope="col">{{$data->email}}</td>
                <td scope="col">{{$data->date}}</td>
                <td scope="col">{{$data->product_name}}</td>
                <td scope="col">{{$data->product_quantity}}</td>
                <td scope="col">{{$data->product_price}}</td>
                <td scope="col">{{$data->total_amount}}</td>
                <td scope="col">
                    <a class="btn btn-primary" href="{{route('view.report',$data->id)}}"><i class="fa-regular fa-eye"></i></a>
                    <a class="btn btn-success" href="{{route('edit.report',$data->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a class="btn btn-info" href="{{route('delete.report',$data->id)}}"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{$report->links()}}
@endsection