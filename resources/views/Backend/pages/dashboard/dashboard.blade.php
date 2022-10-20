@extends('Backend.master')
@section('backend_content')
<div class="content container-fluid">
				
    <!-- Page Header -->
    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Welcome Admin!</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Page Header -->

    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body bg-warning">
                    <span class="dash-widget-icon"><i class="fa fa-cart-shopping"></i></span>
                    <div class="dash-widget-info">
                        <h3>112</h3>
                        <span>Products</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body bg-danger">
                    <span class="dash-widget-icon"><i class="fa fa-cart-shopping"></i></span>
                    <div class="dash-widget-info">
                        <h3>44</h3>
                        <span>Categories</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body bg-success">
                    <span class="dash-widget-icon"><i class="fa fa-copyright"></i></span>
                    <div class="dash-widget-info">
                        <h3>37</h3>
                        <span>Brands</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
            <div class="card dash-widget">
                <div class="card-body bg-primary">
                    <span class="dash-widget-icon"><i class="la la-cube"></i></span>
                    <div class="dash-widget-info">
                        <h3>218</h3>
                        <span>Vendors</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection