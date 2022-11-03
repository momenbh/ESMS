@extends('Backend.master')
@section('backend_content')
<label for="amount">Amount</label>
        <input id="amount" type="number" class="form-control" value="{{$payment->amount}}" readonly>
        <label for="vendors">Vendors</label>
        <input id="vendors" type="text" class="form-control" value="{{$payment->vendors}}" readonly>
        <label for="customer">Customer Id</label>
        <input id="customer" type="number" class="form-control" value="{{$payment->customer_id}}" readonly>
        <label for="name">Customer Name</label>
        <input id="name" type="text" class="form-control" value="{{$payment->customer_name}}" readonly>
        <label for="status">Status</label>
        <input id="status" type="text" class="form-control" value="{{$payment->status}}" readonly>
@endsection