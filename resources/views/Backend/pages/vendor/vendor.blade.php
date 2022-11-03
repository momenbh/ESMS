@extends('Backend.master')
@section('backend_content')
<div style="padding: 25px;display:flex;justify-content:space-between">
   <h2 style="color: blue">Add Vendor</h2>
   <a href="{{route('form.vendor')}}"style="margin-right:200px" class="btn btn-success mt-5" col>Create</a>
</div>
<div style="padding: 15px">
   <table class="table">
      <thead>
         <tr>
            <th scope="col">ID</th>
            <th scope="col">Vendor Name</th>
            <th scope="col">Product Name</th>
            <th scope="col">Address</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($vendor as $key=>$data )
            
      
         <tr>
            <td scope="col">{{$key+1}}</td>
            <td scope="col">{{$data->vendor_name}}</td>
            <td scope="col">{{$data->Product_name}}</td>
            <td scope="col">{{$data->address}}</td>
            <td scope="col">{{$data->email}}</td>
            <td scope="col">
               <a class="btn btn-primary" href="{{route('view.vendor',$data->id)}}"><i class="fa-regular fa-eye"></i></a>
                    <a class="btn btn-success" href="{{route('edit.vendor',$data->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a class="btn btn-info" href="{{route('delete.vendor',$data->id)}}"><i class="fa-solid fa-trash"></i></a>
            </td>
         </tr>
         @endforeach
      </tbody>

   </table>
</div>
{{$vendor->links()}}
@endsection