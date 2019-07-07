@extends('layouts.app')
@section('content')
   {{-- {{$profile_data}}--}}
   @if(\Session::has('message'))
       <div class="alert alert-success w-75">
           <p>{{$id = \Session::get('message')}}</p>
       </div>
   @endif
   @foreach($profile_data as $data)  <center>
    <div class="content">
        <div class="container-fluid">
         <div class="row">

            <div class="col-lg-8 col-md-7">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Edit Profile</h4>
                    </div>
                    <div class="content">
                        <form action="{{route('profile.myupdate',[$data['id']])}}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
           <input type="text" name="name" id="name"  class="form-control border-input" value="{{$data['name']}}">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input name="email" id="email" type="email" class="form-control border-input" value="{{$data['email']}}">
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" id="address" name="address" class="form-control border-input" placeholder="Home Address" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="reg">Registration</label>
                                        <input type="text" id="reg" name="reg" disabled class="form-control border-input" value="{{$data['regid']}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" id="phone" class="form-control border-input" value="{{$data['phone']}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="number">Postal Code</label>
                                        <input type="number" id="number" name="number" disabled class="form-control border-input" value="{{$data['permission']}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="about">About Me</label>
                                        <textarea name="about" id="about" rows="5" class="form-control border-input" placeholder="Here can be your description" value="Mike">Oh so, your weak rhyme
You doubt I'll bother, reading into it
I'll probably won't, left to my own devices
But that's the difference in our opinions.</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Update Profile</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>


        </div>

    </div>
    </div></center>
    @endforeach
@endsection
