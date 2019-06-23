@extends('layouts.master')
@section('title')
    Create new Complain
@endsection

@section('content')
    <div class="row">
        <div class="col-4"></div>
        <div class="col-8">

            @if(\Session::has('success'))
                <div class="alert alert-danger">
                    <p>{{\Session::get('success')}}</p>

                </div>

                @endif

            <form action="{{ url('complain') }}" method="POST">
                {{csrf_field()}}
                <table class="w-75 border">
                    <tr>
                        <td>Catagory</td>
                        <td>
                            <select name="catagory_id" id="catagory_id" required>
                                <option value="">Select</option>
                                <option value="1">normal</option>
                                <option value="2">abnormal</option>

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

        </div>

    </div>


@endsection
