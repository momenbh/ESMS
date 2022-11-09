@extends('Backend.master')
@section('backend_content')
<form action="{{route('store.oredr')}}" method="POST">

    @if ($errors->any())
    @foreach ($errors->all() as $message)
        <p class="alert alert-danger">{{ $message }}</p>
    @endforeach
    @endif
    
    @csrf
   <div style="padding: 15px">
    <label for="name"> selete product</label>
    <select name="product_id" id="" class="form-control">
        @foreach ($product as $data) 
        <option value="{{$data->id}}">{{$data->product_name}}</option>
        @endforeach
    </select>
    <label for="price">Total price</label>
    <input  id="price" type="number" class="form-control" name="total_price" required>
    <label for="discount">Total Discount</label>
    <input  id="discount" type="number" class="form-control" name="total_discount" required>
    <label for="vat">Total Vat</label>
    <input  id="vat" type="number" class="form-control" name="total_vat" required>
    <label for="payable">Total Payable</label>
    <input  id="payable" type="text" class="form-control" name="total_payable" required>
    <label for="sellby">SellBy</label>
    <input  id="sellby" type="text" class="form-control" name="sell_by" required>
    <button type="submit" class="btn btn-success mt-2">Submit</button>
   </div>
</form>
@endsection