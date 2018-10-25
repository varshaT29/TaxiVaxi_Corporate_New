@extends('landing.layouts.master')

@section('content')
  <nav class="fh5co-nav" role="navigation">
    <div class="container">
      <div class="row">
        <div class="col-xs-2 text-left">
          <div id="fh5co-logo"><a href="{{ route('landing') }}">Fleet247<span>.</span></a></div>
        </div>
        <div class="col-xs-10 text-right menu-1">
          <ul>
            <li><a href="{{ route('landing') }}">Home</a></li>
            <li><a href="{{ route('contact') }}">Contact Us</a></li>
            <li class="active"><a href="{{ route('signup') }}">Register</a></li>
            <li><a href="{{ route('operator.login') }}">Login</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(landing/images/img_bg_1.jpg); height:300px" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-7 text-left">
          <div class="display-t">
            <div class="display-tc animate-box" data-animate-effect="fadeInUp">
              <h1 class="mb30" style="margin-bottom: 200px !important">Signup Request Received</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div id="fh5co-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-md-push-1 animate-box">
          <div class="fh5co-contact-info">
            <h3>Thank you for your Request</h3>
            <h4>{{ session('success-message') }}</h4>
            <h4>One of our associate will reach to you within 24 workin hours.</h4>
            <h4>Please Check your email for further instructions.</h4>
            <h4>In case you have any query, you can call our customer service representative: 08030656503</h4>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
