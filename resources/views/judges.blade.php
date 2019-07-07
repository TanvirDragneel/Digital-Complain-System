@extends('layouts.master')
@section('content')

    @if(empty($judges))
        No Judge found
    @else
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Judge Category</th>
            </tr>
            </thead>
            <tbody>
            @foreach($judges as $judge)
                <tr>

                    <td>{{$judge->users['0']['name']}}</td>
                    <td>{{$judge->users['0']['email']}}</td>
                    <td>{{$judge->users['0']['phone']}}</td>
                    <td>{{ $judge->comp_category}}</td>
                </tr>
            @endforeach

            </tbody>
        </table>
        @endif

    @endsection


