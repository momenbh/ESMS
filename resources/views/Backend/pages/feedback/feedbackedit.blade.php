@extends('Backend.master')
@section('backend_content')
<div style="padding: 20px">
    <form action="{{route('update.feedback',$feedback->id)}}" method="POST">
        @csrf
        <label for="product">Product Id</label>
        <input id="product" type="number" class="form-control" name="product_id" value="{{ $feedback->product_id}}">
        <label for="rating">Rating</label>
        <input id="rating" type="text" class="form-control" name="rating" value="{{$feedback->rating}}">
        <label for="customer">Customer Id</label>
        <input id="customer" type="number" class="form-control" name="customer_id" value="{{$feedback->customer_id}}">
        <label for="feedback">Feedback Id</label>
        <input id="feedback" type="number" class="form-control" name="feedback_id" value="{{$feedback->feedback_id}}">
        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
    </form>
</div>




@endsection