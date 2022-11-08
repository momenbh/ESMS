@extends('Backend.master')
@section('backend_content')
<div style="padding: 20px">
    <form action="{{route('store.report')}}" method="POST">
        @if ($errors->any())
        @foreach ($errors->all() as $message)
            <p class="alert alert-danger">{{ $message }}</p>
        @endforeach
        @endif

        @csrf
        <label for="order">Order Id</label>
        <input id="order" type="number" class="form-control" name="order_id" required>
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control" name="email" required>
        <label for="date">Date</label>
        <input id="date" type="date" class="form-control" name="date" required>
        <label for="name">Product Name</label>
        <input id="name" type="text" class="form-control" name="product_name" required>
        <label for="product">Product Quantity</label>
        <input id="product" type="number" class="form-control" name="product_quantity" required>
        <label for="product">Product Price</label>
        <input id="product" type="number" class="form-control" name="product_price" required>
        <label for="amount">Total Amount</label>
        <input id="amount" type="number" class="form-control" name="total_amount" required>
        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
    </form>
</div>
@endsection