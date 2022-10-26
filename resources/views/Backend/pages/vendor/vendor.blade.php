@extends('Backend.master')
@section('backend_content')
<div style="padding: 25px;display:flex;justify-content:space-between">
   <h2 style="color: blue">Add Vendor</h2>
   <a href="{{route('form.vendor')}}"style="margin-right:200px" class="btn btn-success mt-5" col>Create</a>
</div>
@endsection