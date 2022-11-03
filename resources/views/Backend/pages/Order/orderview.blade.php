@extends('Backend.master')
@section('backend_content')
   <label for="id">Customer Id</label>
    <input  id="id" type="number" class="form-control" value="{{$order->coustomer_id}}" readonly>
    <label for="price">Total price</label>
    <input  id="price" type="number" class="form-control" value="{{$order->total_price}}" readonly>
    <label for="discount">Total Discount</label>
    <input  id="discount" type="number" class="form-control" value="{{$order->total_discount}}" readonly>
    <label for="vat">Total Vat</label>
    <input  id="vat" type="number" class="form-control" value="{{$order->total_vat}}" readonly>
    <label for="payable">Total Payable</label>
    <input  id="payable" type="text" class="form-control" value="{{$order->total_payable}}" readonly>
    <label for="sellby">SellBy</label>
    <input  id="sellby" type="text" class="form-control" value="{{$order->sell_by}}" readonly>
@endsection