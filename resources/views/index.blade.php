<!DOCTYPE HTML>
<!--
	Dopetrope by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Digital complain system</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
</head>
<body class="homepage is-preload">
<div id="page-wrapper">

    <!-- Header -->
    <section id="header">

        <!-- Logo -->
        <h1><a href="">Digital Complain System</a></h1>

        <!-- Nav -->
       {{-- <nav id="nav">
            <ul>
                <li class="current"><a href="index.html">Home</a></li>
                <li>
                    <a href="#">Profile</a>
                    <ul>
                        <li><a href="#">Edit profile</a></li>
                        <li><a href="#">My Complains</a></li>
                    </ul>
                </li>
                <li><a href="left-sidebar.html">Judge Panels</a></li>
                <li><a href="right-sidebar.html">Right Sidebar</a></li>
                <li><a href="no-sidebar.html">No Sidebar</a></li>
            </ul>
        </nav>--}}

        <!-- Banner -->
        <section id="banner">
            <header>
                <h2>Your Voice, Our Resolution</h2>
                <p>"Lets make the World a better place"</p>
            </header>
        </section>

        <!-- Intro -->
        <section id="intro" class="container">
            <div class="row">
                <div class="col-4 col-12-medium">
                    <section class="first">
                        <i class="icon featured fa-cog"></i>
                        <header>
                            <h2><a href="{{route('profile.index')}}">My Profile</a></h2>
                        </header>
                        <p>Edit your profile and update your profile</p>
                    </section>
                </div>
                <div class="col-4 col-12-medium">
                    <section class="middle">
                        <i class="icon featured alt fa-flash"></i>
                        <header>
                            <h2><a href="{{route('complain.store')}}">Complain now</a></h2>
                        </header>
                        <p>Click here to submit your Complain...</p>
                    </section>
                </div>
                <div class="col-4 col-12-medium">
                    <section class="last">
                        <i class="icon featured alt2 fa-star"></i>
                        <header>
                            <h2><a href="{{route('judge')}}">Judge Panel</a></h2>
                        </header>
                        <p>Our honorable Judges to solve your problem</p>
                    </section>
                </div>
            </div>
            <footer>
                <ul class="actions">
                    <li><a href="#" class="button large">Get Started</a></li>
                    <li><a href="#" class="button alt large">Learn More</a></li>
                </ul>
            </footer>
        </section>

    </section>

    <!-- Main -->
    <section id="main">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Portfolio -->
                    <section>
                        <header class="major">
                            <h2>My Complains</h2>
                        </header>
                        @if($cdata->isEmpty())
                            No Complain Found
                            @else


                        <div class="row">@foreach($cdata as $data)
                            <div class="col-4 col-6-medium col-12-small">
                                <section class="box">
                                    <a href="#" class="image featured"><img src="{{asset('images/pic01.jpg')}}" alt="" /></a>
                                    <header>
                                        <h3>{{$data['comp_title']}} </h3> <small>Category:: {{$data->category->comp_category}}</small>
                                    </header>
                                    <p style="text-align: justify;text-justify: inter-word;">
                                        {{str_limit($data['comp_details'],100)}}
                                    </p>
                                    <footer>
                                        <ul class="actions">
                                            <li><a href="{{route('complain.show',[$data['id']])}}" class="button alt">Continue reading...</a></li>
                                            <li>{{$data->judge_status == '0' ? 'Pending':'Solved'}}</li>
                                        </ul>
                                    </footer>
                                </section>
                            </div>@endforeach
                        </div>

                        @endif
                    </section>

                </div>
                <div class="col-12">

                    <!-- Blog -->
                </div>
            </div>
        </div>
    </section>

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
