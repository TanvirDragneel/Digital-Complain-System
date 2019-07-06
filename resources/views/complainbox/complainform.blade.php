@extends('layouts.master')
@section('title')
    Create new Complain
@endsection

@section('content')
    <div class="row">
        <div class="container">

            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{\Session::get('success')}}</p>

                </div>

            @endif
            @if($count<0)
                Please create a Category first.. <a href="{{route('category.index')}}">click here</a>
            @else
                <div class="card" style="margin-left: 10%; margin-right: 10%; padding-left:10%; padding-top:2%; padding-bottom:2%; padding-right:10%; border-radius: 25px; box-shadow: 0px 4px 4px #999;">
                <form action="{{ url('complain') }}" method="POST" class="form-group col-md-12 text-center">
                    {{csrf_field()}}
                    <input type="hidden" name="user_id" class="form-control"
                           value="{{ \Illuminate\Support\Facades\Auth::id() }}">
                    <br/>

                    <label for="catagory_id"> <b>Category</b> </label>
                    <select name="catagory_id" class="form-control" id="catagory_id" required>
                        <option value="">Select</option>
                        @foreach($catagorydata as $data)
                            <option value="{{$data['id']}}">{{$data['comp_category']}}</option>

                        @endforeach

                    </select>
                    <br/>

                    <label for="title"> <b>Complain Title</b>  </label>
                    <input type="text" class="form-control" name="title" required>
                    <br/>

                    <label for="details"> <b>Complain Details</b> </label>
                    <textarea name="details" class="form-control" id="" cols="30" rows="10" required></textarea>
                    <br/>

                    <label for="file"> <b>Attach File</b> </label>
                    <input type="file" name="file" class="form-control">
                    <br/>

                    <Button type="submit" class="btn btn-primary col-md-4" name="submit">Submit</Button>


                </form>
                </div>
            @endif
        </div>

    </div>


@endsection
