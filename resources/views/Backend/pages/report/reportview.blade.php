@extends('Backend.master')
@section('backend_content')
<label for="order">Order Id</label>
<input id="order" type="number" class="form-control" value="{{$report->order_id}}" readonly>
<label for="email">Email</label>
<input id="email" type="email" class="form-control" value="{{$report->email}}" readonly>
<label for="date">Date</label>
<input id="date" type="date" class="form-control" value="{{ $report->date}}" readonly>
<label for="name">Product Name</label>
<input id="name" type="text" class="form-control" value="{{ $report->product_name}}" readonly>
<label for="product">Product Quantity</label>
<input id="product" type="number" class="form-control" value="{{$report->product_quantity}}"readonly>
<label for="product">Product Price</label>
<input id="product" type="number" class="form-control" value="{{$report->product_price}}" readonly>
<label for="amount">Total Amount</label>
<input id="amount" type="number" class="form-control" value="{{$report->total_amount}}" readonly>
@endsection