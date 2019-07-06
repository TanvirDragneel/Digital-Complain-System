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
                <td>{{$judge->users->name}}</td>
                <td>{{$judge->users->email}}</td>
                <td>{{$judge->users->phone}}</td>
                <td>{{ $judge->comp_category}}</td>
            </tr>
            @endforeach

            </tbody>
        </table>
    @endif

    @endsection

</section>
