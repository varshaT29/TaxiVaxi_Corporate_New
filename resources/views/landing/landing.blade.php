@extends('landing.layouts.master')

@section('content')
  <nav class="fh5co-nav" role="navigation">
    <div class="container">
      <div class="row">
        <div class="col-xs-2 text-left">
          <div id="fh5co-logo"><a href="{{ route('agent.landing') }}">TaxiVaxi<span>.</span></a></div>
        </div>
        <div class="col-xs-10 text-right menu-1">
          <ul>
            <li class="active"><a href="{{ route('agent.landing') }}">Home</a></li>
            <li ><a href="{{ route('agent.contact') }}">Contact Us</a></li>
            <li ><a href="{{ route('agent.login') }}">Login</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url(/landing/images/img_bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-7 text-left">
          <div class="display-t">
            <div class="display-tc animate-box" data-animate-effect="fadeInUp">
              <h1 class="mb30">Lets ride together</h1>
              <p>
                <a href="#" class="btn btn-primary">Get Started</a>  <em class="or">or</em>
                
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- <div id="fh5co-about">
    <div class="container">
      <div class="row animate-box" data-animate-effect="fadeInUp">
        <div class="col-md-8 col-md-offset-2 text-left fh5co-heading">
          <span>Know it</span>
          <h2>About us</h2>
          <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
        </div>
      </div>
      <div class="row">
        <div class="animate-box formBlock" data-animate-effect="fadeInUp">
        </div>
      </div>
    </div>
  </div> -->

  <div id="fh5co-services" class="fh5co-bg-section border-bottom">
    <div class="container">
      <div class="row row-pb-md">
        <div class="col-md-8 col-md-offset-2 text-left animate-box" data-animate-effect="fadeInUp">
          <div class="fh5co-heading">
            <span>We're expert</span>
            <h2>What We Do</h2>
            <!-- <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p> -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 ">
          <div class="feature-center animate-box" data-animate-effect="fadeInUp">
            <span class="icon">
              <img src="landing/images/server.svg">
            </span>
            <h3>Confidentiality</h3>
            <p>We offer data security such that no 3rd Party is able to access the client data or the operator data.</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 ">
          <div class="feature-center animate-box" data-animate-effect="fadeInUp">
            <span class="icon">
              <img src="landing/images/clipboards.svg">
            </span>
            <h3>Trustworthy</h3>
            <p>
              Be it Operators or Clients, everybody on our platform is vetted.
              Clients can rest assured that they are getting cabs with verified documentation.
              Operators will know where the booking is coming from and where their car is, at all times
            </p>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 col-sm-6 ">
          <div class="feature-center animate-box" data-animate-effect="fadeInUp">
            <span class="icon">
              <i class="icon-monitor"></i>
            </span>
            <h3>Web-based Portal</h3>
            <p>
              Unlike a software, which is prone to glitches and downtime, we provide a web-based portal which is up and running 24x7.
              A web-based portal ensures that you never lose your data
            </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="clearfix visible-md-block"></div>
        <div class="col-md-4 col-sm-6 ">
          <div class="feature-center animate-box" data-animate-effect="fadeInUp">
            <span class="icon">
              <img src="landing/images/cloud.svg">
            </span>
            <h3>Paperless Billing</h3>
            <p>All booking details are visible on the dashboard – no need for maintaining bulky registers!
              Using our portal, Bill Generation can be done automatically – we also incorporate TDS and GST
              Additionally, by using the Driver App, bill can be generated when the client is being dropped off</p>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 col-sm-6 ">
          <div class="feature-center animate-box" data-animate-effect="fadeInUp">
            <span class="icon">
              <img src="landing/images/screen.svg">
            </span>
            <h3>Seamless Booking Flow</h3>
            <p>Get email alerts for potential bookings.
              Communication to client/operator/driver upon confirmation.
              Manage your bookings with ease – details of past, current, and upcoming bookings are visible on the portal
            </p>
          </div>
        </div>
        <div class="clearfix visible-md-block"></div>
      </div>
    </div>
  </div>
@endsection
