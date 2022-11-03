@extends('Backend.master')
@section('backend_content')
<form action="{{route('store.oredr')}}" method="POST">
    @csrf
   <div style="padding: 15px">
    <label for="id">Customer Id</label>
    <input  id="id" type="number" class="form-control" name="coustomer_id">
    <label for="price">Total price</label>
    <input  id="price" type="number" class="form-control" name="total_price">
    <label for="discount">Total Discount</label>
    <input  id="discount" type="number" class="form-control" name="total_discount">
    <label for="vat">Total Vat</label>
    <input  id="vat" type="number" class="form-control" name="total_vat">
    <label for="payable">Total Payable</label>
    <input  id="payable" type="text" class="form-control" name="total_payable">
    <label for="sellby">SellBy</label>
    <input  id="sellby" type="text" class="form-control" name="sell_by">
    <button type="submit" class="btn btn-success mt-2">Submit</button>
   </div>
</form>
@endsection