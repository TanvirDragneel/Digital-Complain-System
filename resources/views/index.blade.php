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
        <h1><a href="index.html">Digital Complain System</a></h1>

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
                <h2>Your Voice ,Our Resolution</h2>
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
                            <h2><a href="{{route('profile.show',['1'])}}">My Profile</a></h2>
                        </header>
                        <p>Edit your proflie and update your profle</p>
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
                            <h2>Judge Panel</h2>
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
                            <h2>My Portfolio</h2>
                        </header>
                        <div class="row">
                            <div class="col-4 col-6-medium col-12-small">
                                <section class="box">
                                    <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
                                    <header>
                                        <h3>Ipsum feugiat et dolor</h3>
                                    </header>
                                    <p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
                                    <footer>
                                        <ul class="actions">
                                            <li><a href="#" class="button alt">Find out more</a></li>
                                        </ul>
                                    </footer>
                                </section>
                            </div>
                            <div class="col-4 col-6-medium col-12-small">
                                <section class="box">
                                    <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                                    <header>
                                        <h3>Sed etiam lorem nulla</h3>
                                    </header>
                                    <p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
                                    <footer>
                                        <ul class="actions">
                                            <li><a href="#" class="button alt">Find out more</a></li>
                                        </ul>
                                    </footer>
                                </section>
                            </div>
                            <div class="col-4 col-6-medium col-12-small">
                                <section class="box">
                                    <a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
                                    <header>
                                        <h3>Consequat et tempus</h3>
                                    </header>
                                    <p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
                                    <footer>
                                        <ul class="actions">
                                            <li><a href="#" class="button alt">Find out more</a></li>
                                        </ul>
                                    </footer>
                                </section>
                            </div>
                            <div class="col-4 col-6-medium col-12-small">
                                <section class="box">
                                    <a href="#" class="image featured"><img src="images/pic05.jpg" alt="" /></a>
                                    <header>
                                        <h3>Blandit sed adipiscing</h3>
                                    </header>
                                    <p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
                                    <footer>
                                        <ul class="actions">
                                            <li><a href="#" class="button alt">Find out more</a></li>
                                        </ul>
                                    </footer>
                                </section>
                            </div>
                            <div class="col-4 col-6-medium col-12-small">
                                <section class="box">
                                    <a href="#" class="image featured"><img src="images/pic06.jpg" alt="" /></a>
                                    <header>
                                        <h3>Etiam nisl consequat</h3>
                                    </header>
                                    <p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
                                    <footer>
                                        <ul class="actions">
                                            <li><a href="#" class="button alt">Find out more</a></li>
                                        </ul>
                                    </footer>
                                </section>
                            </div>
                            <div class="col-4 col-6-medium col-12-small">
                                <section class="box">
                                    <a href="#" class="image featured"><img src="images/pic07.jpg" alt="" /></a>
                                    <header>
                                        <h3>Dolore nisl feugiat</h3>
                                    </header>
                                    <p>Lorem ipsum dolor sit amet sit veroeros sed amet blandit consequat veroeros lorem blandit  adipiscing et feugiat phasellus tempus dolore ipsum lorem dolore.</p>
                                    <footer>
                                        <ul class="actions">
                                            <li><a href="#" class="button alt">Find out more</a></li>
                                        </ul>
                                    </footer>
                                </section>
                            </div>
                        </div>
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
                            <h2>Tempus consequat</h2>
                        </header>
                        <ul class="divided">
                            <li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
                            <li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
                            <li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
                            <li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
                            <li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
                            <li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-4 col-6-medium col-12-small">
                    <section>
                        <header>
                            <h2>Ipsum et phasellus</h2>
                        </header>
                        <ul class="divided">
                            <li><a href="#">Lorem ipsum dolor sit amet sit veroeros</a></li>
                            <li><a href="#">Sed et blandit consequat sed tlorem blandit</a></li>
                            <li><a href="#">Adipiscing feugiat phasellus sed tempus</a></li>
                            <li><a href="#">Hendrerit tortor vitae mattis tempor sapien</a></li>
                            <li><a href="#">Sem feugiat sapien id suscipit magna felis nec</a></li>
                            <li><a href="#">Elit class aptent taciti sociosqu ad litora</a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-4 col-12-medium">
                    <section>
                        <header>
                            <h2>Vitae tempor lorem</h2>
                        </header>
                        <ul class="social">
                            <li><a class="icon fa-facebook" href="#"><span class="label">Facebook</span></a></li>
                            <li><a class="icon fa-twitter" href="#"><span class="label">Twitter</span></a></li>
                            <li><a class="icon fa-dribbble" href="#"><span class="label">Dribbble</span></a></li>
                            <li><a class="icon fa-tumblr" href="#"><span class="label">Tumblr</span></a></li>
                            <li><a class="icon fa-linkedin" href="#"><span class="label">LinkedIn</span></a></li>
                        </ul>
                        <ul class="contact">
                            <li>
                                <h3>Address</h3>
                                <p>
                                    Untitled Incorporated<br />
                                    1234 Somewhere Road Suite<br />
                                    Nashville, TN 00000-0000
                                </p>
                            </li>
                            <li>
                                <h3>Mail</h3>
                                <p><a href="#">someone@untitled.tld</a></p>
                            </li>
                            <li>
                                <h3>Phone</h3>
                                <p>(800) 000-0000</p>
                            </li>
                        </ul>
                    </section>
                </div>
                <div class="col-12">

                    <!-- Copyright -->
                    <div id="copyright">
                        <ul class="links">
                            <li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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
