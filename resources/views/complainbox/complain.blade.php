@extends('layouts.master')

@section('content')

    <!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>My Profile</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
</head>
<body class="no-sidebar is-preload">
<div id="page-wrapper">

    <!-- Header -->
    <section id="header">

        <!-- Logo -->
        <h1><a href="{{route('home')}}">Digital Complain System</a></h1>

        <!-- Nav -->

    </section>

    <!-- Main -->

            <section id="main">
                <div class="container">

                    <!-- Content -->
                    <article class="box post">

                        @foreach($showdata as $data)
                            <img src="{{URL::to($data['img_path'])}}" alt="" style="height: 300px; width:300px;"/>

                        <section>
                            <header>
                                <h3>{{$data['comp_title']}}  @if(\Illuminate\Support\Facades\Auth::user()->permission > 1)
                                        <form action="{{route('status')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="status" id="status" value="1">
                                            <input type="hidden" name="id" id="id" value="{{$data['id']}}">
                                            <input type="submit" value="Set as Solved">
                                        </form>
                                @endif
                                </h3>
                                <b>{{$data->judge_status == '0' ? 'Pending':'Solved'}}</b>
                            </header>
                            <p>
                               {{$data['comp_details']}}
                            </p>
                        </section>
                    </article>
                    {{--show commment----------------}}
                    @if(empty($comments))
                        <p>No comment found</p>
                        @else
                       @foreach($comments as $c)
                            >> {{$c->users['name']}} <br>
                            >>>>{{$c->comp_comments}} <br>
                        @endforeach
                        @endif

                    {{------------------submit comment---------------------}}
                    <form action="{{route('comment')}}" method="post">
                        @csrf
                        <input type="text" name="comment" id="comment">
                        <input type="hidden" name="userid" value="{{\Illuminate\Support\Facades\Auth::id()}}">
                        <input type="hidden" name="complainid" value="{{$data->id}}">
                    </form>
                </div>
                @endforeach
                
                
            </section>

    {{-------------------comment-----------------------}}


    <!-- Footer -->
    <section id="footer">
        <div class="container">
            <div class="row">

                <div class="col-4 col-6-medium col-12-small">
                    <section>
                        <header>
                            <h2>Things you need to know</h2>
                        </header>
                        <ul class="divided">
                            <li> <b>Digital Complain System</b> is a website for... </li>
                            <li>1.Reaching your voice to the right authority .</li>
                            <li>2.Providing Safe and secured Problem solving way. </li>
                            <li>3.We make sure to hide and secure the users personal information from other users </li>
                            <li>4.helping the authority to take steps as soon as the crime or problem emerges </li>
                            <li>5.helping to have a healthy and secured work</li>
                        </ul>
                    </section>
                </div>
                <div class="col-4 col-6-medium col-12-small">
                    <section>
                        <header>
                            <h2>Credits</h2>
                        </header>
                        <ul class="divided">
                            <li> <b> <u>Course Mentor</u></b> </li>
                            <li> MD Masum , Professor,CSE ,SUST</li>
                            <li><b> <u>Advisor</u> </b> </li>
                            <li>Ripul Sir, Associate Professor,CSE, SUST</li>
                            <li>Moqsadur Rahman, Lecturer, CSE, SUST</li>

                        </ul>
                    </section>
                </div>
                <div class="col-4 col-12-medium">
                    <section>
                        <header>
                            <h2>Social Links</h2>
                        </header>
                        <ul class="social">
                            <li><a class="icon fa-facebook" href="https://www.facebook.com/mdtanvir.hossain.182"><span class="label">Facebook</span></a></li>
                            <li><a class="icon fa-twitter" href="#"><span class="label">Twitter</span></a></li>
                            <li><a class="icon fa-dribbble" href="#"><span class="label">Dribbble</span></a></li>
                            <li><a class="icon fa-tumblr" href="https://www.tumblr.com/blog/tanvirdragneel"><span class="label">Tumblr</span></a></li>
                            <li><a class="icon fa-linkedin" href="#"><span class="label">LinkedIn</span></a></li>
                        </ul>
                        <ul class="contact">
                            <li>
                                <h3>Address</h3>
                                <p>
                                    Shahjalal University of Science and Technology<br />
                                    Akhalia, Sylhet<br />
                                    In the wonderful Bangladesh
                                </p>
                            </li>
                            <li>
                                <h3>Mail</h3>
                                <p><a href="tanvirhossaininfinity@gmail.com">tanvirhossaininfinity@gmail.com</a></p>
                            </li>
                            <li>
                                <h3>Phone</h3>
                                <p>01521206138</p>
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="col-12">

                    <!-- Copyright -->
                    <div id="copyright">
                        <ul class="links">
                            <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="www.facebook.com/mdtanvir.hossain.182">Tanvir's Lair</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.dropotron.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>


@endsection
