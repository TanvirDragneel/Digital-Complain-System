@extends('layouts.master')
@section('content')

    @if(\Session::has('success'))
        {{\Session::get('success')}}
    @endif
    @if($count < 0)
        <p>No Category Created</p>
        @else
        <table>

            @foreach($getcategory as $c)
                <tr>
                    <td> {{ $c['id'] }} </td>
                    <td> {{ $c['comp_category'] }} </td>
                    <td> {{ $c['cat_details'] }} </td>
                </tr>
            @endforeach

        </table>
        @endif
    <form action="{{route('category.store')}}" method="post">
        @csrf
        <label for="category">Category Name:</label>
        <input type="text" name="category" id="category">
        <br>
        <label for="cat_details">Category Details:</label>
        <textarea name="cat_details" id="cat_details" cols="30" rows="10"></textarea>
        <br>
        <label for="author">Select Judge:</label>
            <select name="author" id="author" required>
                <option value="">Select</option>
                @foreach($author as $au)
                    <option value="{{$au['id']}}">{{$au['name']}}</option>
                @endforeach
            </select>
        <br>
        <input type="submit" value="Create">
    </form>
    @endsection
