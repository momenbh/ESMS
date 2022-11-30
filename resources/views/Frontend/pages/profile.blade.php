@extends('Frontend.master')
@section('frontend_content')
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px"
                        src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                        class="font-weight-bold">{{auth()->user()->name}}</span><span class="text-black-50">{{auth()->user()->email}}</span><span>
                    </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">User Profile</h4>
                    </div>
                    <form action="{{route('profile.update')}}" method='POST'>
                        
                        @method('put')
                        @csrf
                    <div class="row mt-2">
                        <div class="col-md-12"><label class="labels">Name</label><input name="customer_name" type="text" class="form-control"
                                placeholder="Enter your name" value="{{auth()->user()->name}}"></div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Mobile Number</label>
                            <input type="text" name="phone_number"
                                class="form-control" placeholder="enter phone number" value="{{auth()->user()->mobile}}"></div>
                        <div class="col-md-12"><label class="labels">Address</label>
                            <input type="text"name="user_address"
                                class="form-control" placeholder="enter your address " value="{{auth()->user()->address}}"></div>
                        
                        
                        
                        <div class="col-md-12"><label class="labels">Email ID</label>
                            <input type="text"name="customer_email"
                                class="form-control" placeholder="enter email id" value="{{auth()->user()->email}}"></div>
                        
                    </div>
                    <div class="row mt-3">
                       
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit">Update
                            Profile</button></div>
                </div>
            </form>
            </div>
           
        </div>
    </div>
    </div>
    </div>
@endsection
