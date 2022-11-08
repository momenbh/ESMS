@extends('Backend.master')
@section('backend_content')
<div class="d-flex justify-content-between align-items-center p-2 ">
    <h1 style="color: blue">Create Payment</h1>
    <a href="{{route('form.payment')}}" class="btn btn-success mt-5" style="margin-right: 200px">Create</a>
</div>
<div style="padding:15px">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Amount</th>
                <th scope="col">Vendors</th>
                <th scope="col">Customer Id</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Status</th>
                <th scope="col">Acton</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($payment as $key=>$data)
                
       
            <tr>
                <td scope="col">{{$key+1}}</td>
                <td scope="col">{{$data->amount}}</td>
                <td scope="col">{{$data->vendors}}</td>
                <td scope="col">{{$data->customer_id}}</td>
                <td scope="col">{{$data->customer_name}}</td>
                <td scope="col">{{$data->status}}</td>
                <td scope="col">
                    <a class="btn btn-primary" href="{{route('view.payment',$data->id)}}"><i class="fa-regular fa-eye"></i></a>
                    <a class="btn btn-success" href="{{route('edit.payment',$data->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a class="btn btn-info" href="{{route('delete.payment',$data->id)}}"><i class="fa-solid fa-trash"></i></a>
                    
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
{{$payment->links()}}
@endsection