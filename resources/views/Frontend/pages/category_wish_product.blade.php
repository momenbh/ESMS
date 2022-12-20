@extends('Frontend.master')
@section('frontend_content')

<div class="container mt-100"style="padding-top: 20px">

    <div class="row">
        @if($products->count()>0)
            @foreach($products as $product)
            <div class="col-md-4 col-sm-6">
                <div class="card mb-30">
                    <a class="card-img-tiles" href="#" data-abc="true">
                        <div class="inner">
                            <div class="main-img">
                                <img src="{{ url('/uploads/' . $product->image) }}" alt="Category">
                            </div>

                        </div>
                    </a>
                    <div class="card-body text-center">
                        <h4 class="card-title">{{$product->product_name}}</h4>
                        <p class="text-muted">Price:  {{$product->product_price}}</p><a class="btn btn-outline-primary btn-sm" href="{{route('customer.product.view',$product->id)}}" data-abc="true">View Products</a>
                    </div>
                </div>
            </div>
            @endforeach
        @else
            <p class="alert alert-danger">No Product Found.</p>
        @endif
    </div>
</div>

@endsection