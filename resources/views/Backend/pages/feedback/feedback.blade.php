@extends('Backend.master')
@section('backend_content')
<div class="d-flex justify-content-between align-items-center p-2">
    <h1 style="color: blue" >Create Feedback</h1>
    <a href="{{route('form.feedback')}}"class="btn btn-success mt-5" style="margin-right: 200px">create</a>
</div>
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Product Id</th>
                <th scope="col">Rating</th>
                <th scope="col">Customer Id</th>
                <th scope="col">Feedback Id</th>
                <th scope="col">Action</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($feedback as $key=>$data )
                
           
            <tr>
                <td scope="col">{{$key+1}}</td>
                <td scope="col">{{$data->product_id}}</td>
                <td scope="col">{{$data->rating}}</td>
                <td scope="col">{{$data->customer_id}}</td>
                <td scope="col">{{$data->feedback_id}}</td>
                <td scope="col">
                    <a class="btn btn-primary" href="{{route('view.feedback',$data->id)}}"><i class="fa-regular fa-eye"></i></a>
                    <a class="btn btn-success" href="{{route('edit.feedback',$data->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a class="btn btn-info" href="{{route('delete.feedback',$data->id)}}"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>
    {{$feedback->links()}}
</div>
@endsection