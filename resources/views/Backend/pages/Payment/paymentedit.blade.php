@extends('Backend.master')
@section('backend_content')
<div style="padding: 20px">
    <form action="{{route('update.payment',$payment->id)}}" method="POST">
        @csrf
        <label for="amount">Amount</label>
        <input id="amount" type="number" class="form-control" name="amount" value="{{$payment->amount}}">
        <label for="vendors">Vendors</label>
        <input id="vendors" type="text" class="form-control" name="vendors" value="{{ $payment->vendors}}">
        <label for="customer">Customer Id</label>
        <input id="customer" type="number" class="form-control" name="customer_id" value="{{ $payment->customer_id}}">
        <label for="name">Customer Name</label>
        <input id="name" type="text" class="form-control" name="customer_name" value="{{ $payment->customer_name}}">
        <label for="status">Status</label>
        <input id="status" type="text" class="form-control" name="status" value="{{ $payment->status}}">
        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
    </form>
</div>
@endsection