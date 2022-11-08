@extends('Backend.master')
@section('backend_content')
<div style="padding: 20px">
    <form action="{{route('store.payment')}}" method="POST">
        @if ($errors->any())
        @foreach ($errors->all() as $message)
            <p class="alert alert-danger">{{ $message }}</p>
        @endforeach
        @endif

        @csrf
        <label for="amount">Amount</label>
        <input id="amount" type="number" class="form-control" name="amount" required>
        <label for="vendors">Vendors</label>
        <input id="vendors" type="text" class="form-control" name="vendors" required>
        <label for="customer">Customer Id</label>
        <input id="customer" type="number" class="form-control" name="customer_id" required>
        <label for="name">Customer Name</label>
        <input id="name" type="text" class="form-control" name="customer_name" required>
        <label for="status">Status</label>
        <input id="status" type="text" class="form-control" name="status" required>
        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Submit</button>
    </form>
</div>
@endsection