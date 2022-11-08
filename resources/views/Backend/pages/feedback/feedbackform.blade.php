@extends('Backend.master')
@section('backend_content')
<div style="padding: 20px">
    <form action="{{route('store.feedback')}}" method="POST">
        @if ($errors->any())
        @foreach ($errors->all() as $message)
            <p class="alert alert-danger">{{ $message }}</p>
        @endforeach
        @endif

        @csrf
        <label for="product">Product Id</label>
        <input id="product" type="number" class="form-control" name="product_id" required>
        <label for="rating">Rating</label>
        <input id="rating" type="text" class="form-control" name="rating" required>
        <label for="customer">Customer Id</label>
        <input id="customer" type="number" class="form-control" name="customer_id" required>
        <label for="feedback">Feedback Id</label>
        <input id="feedback" type="number" class="form-control" name="feedback_id" required>
        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
    </form>
</div>
@endsection