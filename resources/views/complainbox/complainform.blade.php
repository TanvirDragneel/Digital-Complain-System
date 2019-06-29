@extends('layouts.master')
@section('title')
    Create new Complain
@endsection

@section('content')
    <div class="row">
        <div class="col-4"></div>
        <div class="col-8">

            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{\Session::get('success')}}</p>

                </div>

                @endif
            @if($count<0)
                Please create a Category first.. <a href="{{route('category.index')}}">click here</a>
                @else
                        <form action="{{ url('complain') }}" method="POST">
                            {{csrf_field()}}
                            <table class="w-75 border">
                                <input type="hidden" name="user_id" value="{{ \Illuminate\Support\Facades\Auth::id() }}">
                                <tr>
                                    <td>Catagory </td>
                                    <td>
                                        <select name="catagory_id" id="catagory_id" required>
                                            <option value="">Select</option>
                                           @foreach($catagorydata as $data)
                                                <option value="{{$data['id']}}">{{$data['comp_category']}}</option>

                                            @endforeach

                                        </select>

                                    </td>
                                </tr>
                                <tr>
                                    <td>Title</td>
                                    <td><input type="text" name="title" required> </td>
                                </tr>
                                <tr>
                                    <td>Details</td>
                                    <td><textarea name="details" id="" cols="30" rows="10" required></textarea> </td>
                                </tr>
                                <tr>
                                    <td>Attatch image(optional)</td>
                                    <td><input type="file"> </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <input type="submit" name="submit" value="Submit">
                                    </td>
                                </tr>
                            </table>

                        </form>
                @endif
        </div>

    </div>


@endsection
