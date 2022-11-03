@extends('Backend.master')
@section('backend_content')
<label for="product">Product Id</label>
<input id="product" type="number" class="form-control" value="{{$feedback->product_id}}" readonly>
<label for="rating">Rating</label>
<input id="rating" type="text" class="form-control" value="{{$feedback->rating}}" readonly>
<label for="customer">Customer Id</label>
<input id="customer" type="number" class="form-control" value="{{$feedback->customer_id}}" readonly>
<label for="feedback">Feedback Id</label>
<input id="feedback" type="number" class="form-control" value="{{$feedback->feedback_id}}" readonly>
@endsection