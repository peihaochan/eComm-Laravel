<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="shortcut icon" href="images/star.png" type="favicon/ico" /> -->

    <title>Junction Takeaway</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" />

    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/flexslider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/pricing.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>

    </style>


</head>

<body data-spy="scroll" data-target="#template-navbar">

    <!--== 4. Navigation ==-->
    <nav id="template-navbar" class="navbar navbar-default custom-navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#Food-fair-toggle">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img id="logo" src="{{ asset('frontend/images/junction.png') }}">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="Food-fair-toggle">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#about">about</a></li>
                    <li><a href="#menu-list">menu list</a></li>
                    <li><a href="#contact">contact</a></li>
                    <li><a href="#gallery">gallery</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.row -->
    </nav>



    <!--== Header ==-->
    <section id="header-slider" class="">
        <div class="section-content">
            <h2 class="section-content-title">Junction Takeaway
                est. 1991</h2>
            <h4 class="text-center">What do you fancy on the menu tonight?</h4>
            <div class="col text-center py-2">
                <button class="btn btn-info">Call us</button>
                <button class="btn btn-info">Menu</button>
            </div>
    </section> <!-- header -->

    <!--== 6. About us ==-->
    <section id="about" class="about">
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-2">
                <img id="about-us-image" src={{ asset('frontend/images/salt-and-pepper-chicken-wings_image_9.jpg') }}
                    alt="">
            </div>
            <div class="col-sm-2">
                <img id="about-us-image" src={{ asset('frontend/images/sschick.jpg') }} alt="">
            </div>
            <div class="col-sm-6 dis-table-cell">
                <div class="section-content">
                    <h2 class="section-content-title">Your Local Chinese</h2>
                    <p class="section-content-para">
                        We are a small family business started back in 1991 in a small Welsh Town called Bethesda.
                    </p>
                    <p class="section-content-para">
                        We expanded our second food chain in Llandudno Junction and have been serving here since mid
                        2001.
                    </p>
                    <p class="section-content-para">
                        If you are unsure of what to get tonight, have a flick through the gallery from menu (there’s
                        more to be uploaded!)
                    </p>
                </div> <!-- /.section-content -->
            </div>
        </div>
    </section> <!-- /#about -->


    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <ul id="menu-pricing" class="menu-price">
                </ul>

            </div>
        </div>
    </div>

    </div>
    </section>



    <section id="contact" class="contact">
        <div class="container-fluid color-bg">
            {{-- <img src="{{ asset('frontend/images/special.jpg') }}" alt="special"> --}}
            <div class="row dis-table">
                <div class="hidden-xs col-sm-6 dis-table-cell">
                    <h2 class="section-title">Dive straight in with one of our special offers</h2>
                </div>
                <div class="col-xs-6 col-sm-6 dis-table-cell">
                    <div class="section-content">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos harum iusto dolore nihil
                            fugiat repudiandae, adipisci enim qui, magnam nostrum debitis quibusdam saepe cum
                            necessitatibus animi quam temporibus numquam tempore.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="reservation">
        <div class="wrapper">
            <div class="container-fluid">
                <div class=" section-content">
                    <div class="row">
                        <div class="col-md-5 col-sm-6">
                            <form class="reservation-form" method="post" action="">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control reserve-form empty iconified"
                                                name="name" id="name" placeholder="  &#xf007;  Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email"
                                                class="form-control reserve-form empty iconified" id="email"
                                                placeholder="  &#xf1d8;  e-mail">
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="tel" class="form-control reserve-form empty iconified"
                                                name="phone" id="phone" placeholder="  &#xf095;  Phone">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control reserve-form empty iconified"
                                                name="dateandtime" id="datetimepicker1" placeholder="&#xf017;  Time">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
                                        <textarea type="text" name="message"
                                            class="form-control reserve-form empty iconified" id="message" rows="3"
                                            placeholder="  &#xf086;  We're listening"></textarea>
                                    </div>

                                    <div class="col-md-12 col-sm-12">
                                        <button type="submit" id="submit" name="submit" class="btn btn-reservation">
                                            <span><i class="fa fa-check-circle-o"></i></span>
                                            Make a reservation
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>

                        <div class="col-md-2 hidden-sm hidden-xs"></div>

                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="opening-time">
                                <h3 class="opening-time-title">Hours</h3>
                                <p>We are open 6 days a week:
                                </p>
                                <p> 4:30 PM - 10:30 PM</p>
                                <p>Just need that days rest on Tuesdays</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>




    <section id="contact" class="contact">
        <div class="container-fluid color-bg">
            <div class="row">
                <div class="col-sm-6 dis-table-cell">
                    <h2 class="section-title">Contact us</h2>
                </div>
                <div class="col-sm-6 dis-table-cell">
                    <div class="section-content">
                        <p>Junction Takeaway, 142 Conway Road, Llandudno Junction, LL31 9ND</p>
                        <p>Call us: 01492 581196</p>
                        <p>junction@junction-chinese.co.uk</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <section class="contact-form">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                    <h2>Want to pop over a question?</h2>
                    <div class="row">
                        <form class="contact-form" method="post" action="{{ route('contact.send') }}">
                            @csrf
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" id="name" required="required"
                                        placeholder="  Name">
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" id="email" required="required"
                                        placeholder="  Email">
                                </div>
                                <div class="form-group">
                                    <input name="subject" type="text" class="form-control" id="subject"
                                        required="required" placeholder="  Subject">
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <textarea name="message" type="text" class="form-control" id="message" rows="7"
                                    required="required" placeholder="  Message"></textarea>
                            </div>

                            <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
                                <div class="text-center">
                                    <button type="submit" id="submit" name="submit" class="btn btn-send">Send </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="copyright text-center">
                        <p>
                            &copy; Copyright, {{ date('Y') }} <a href="#">Junction Takeaway</a> <strong> Developed
                             by </strong>
                            Pei Hao Chan
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.mixitup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.validate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jquery.hoverdir.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend/js/jQuery.scrollSpeed.js') }}"></script>
    <script src="{{ asset('frontend/js/script.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

</body>

</html>
