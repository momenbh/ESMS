@extends('Backend.master')
@section('backend_content')
<div class="d-flex justify-content-between align-items-center p-2">
    <h1 style="color: blue" >Create Report</h1>
    <a href="{{route('form.report')}}"class="btn btn-success mt-5" style="margin-right: 200px">create</a>
</div>
@endsection