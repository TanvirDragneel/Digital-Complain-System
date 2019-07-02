@extends('layouts.master')
@section('content')

    @if(empty($judges))
        No Judge found
        @else

            @foreach($judges as $judge)
                <table class="w-75 border border-dark">
                <tr>
                    <td>Name</td>
                    <td>{{$judge->users->name}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{$judge->users->email}}</td>
                </tr> <tr>
                    <td>Phone</td>
                    <td>{{$judge->users->phone}}</td>
                </tr>
                <tr>
                    <td>Judge Category</td>
                    <td>{{ $judge->comp_category}}</td>
                </tr>
                </table>
            @endforeach



    @endif

    @endsection
