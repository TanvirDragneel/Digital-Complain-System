@extends('layouts.master')
@section('content')
    @if($count<0)
        <p>No complain found</p>
        @else
        <table style="width: 50%;">
            <tr>
                <th>Id</th>
                <th>Category</th>
                <th>Title</th>
                <th>Status</th>
            </tr>
            @foreach($complains as $complain)
                <tr>
                    <td>    {{$complain->id}}                                                   </td>
                    <td>    {{$complain->category->comp_category }}                             </td>
                    <td>    {{$complain->comp_title}}                                           </td>
                    <td>    {{$complain->judge_status == '0' ? 'Pending':'Done' }}              </td>


                </tr>

            @endforeach
         </table>
    @endif
@endsection
