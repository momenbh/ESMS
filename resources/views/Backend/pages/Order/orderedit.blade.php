@extends('Backend.master')
@section('backend_content')
<form action="{{route('update.order',$order->id)}}" method="POST">
    @csrf
   <div style="padding: 15px">
    <label for="id">Customer Id</label>
    <input  id="id" type="number" class="form-control" name="coustomer_id" value={{$order->coustomer_id}}>
    <label for="price">Total price</label>
    <input  id="price" type="number" class="form-control" name="total_price" value={{$order->total_price}}>
    <label for="discount">Total Discount</label>
    <input  id="discount" type="number" class="form-control" name="total_discount" value={{$order->total_discount}}>
    <label for="vat">Total Vat</label>
    <input  id="vat" type="number" class="form-control" name="total_vat" value={{$order->total_vat}}>
    <label for="payable">Total Payable</label>
    <input  id="payable" type="text" class="form-control" name="total_payable" value={{$order->total_vat}}>
    <label for="sellby">SellBy</label>
    <input  id="sellby" type="text" class="form-control" name="sell_by" value={{$order->sell_by}}>
    <button type="submit" class="btn btn-success mt-2">Submit</button>
   </div>
</form>
@endsection