@extends('Backend.master')
@section('backend_content')
<div class="d-flex justify-content-between align-items-center p-2">
    <h1 style="color: rgb(0, 89, 255)">Create Discount</h1>
    <a href="{{route('form.discount')}}" class="btn btn-success mt-5" style="margin-right: 200px">Create</a>
</div>
@endsection