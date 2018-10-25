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
            <li><a href="{{ route('agent.landing') }}">Home</a></li>
            <li class="active"><a href="{{ route('agent.contact') }}">Contact Us</a></li>
             <li ><a href="{{ route('agent.login') }}">Login</a></li>
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
              <h1 class="mb30" style="margin-bottom: 200px !important">Contact Us</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  @if($flash = session('success-message'))
  <div class="alert-wrap landing-alert-wrap">
    <div class="alert alert-success landing-alert" role="alert">
      <p>{{ $flash }}</p>
    </div>
  </div>
  @endif

  @if($flash = session('fail-message'))
  <div class="alert-wrap landing-alert-wrap">
    <div class="alert alert-danger landing-alert" role="alert">
      <p>{{ $flash }}</p>
    </div>
  </div>
  @endif

  <div id="fh5co-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-5 col-md-push-1 animate-box">
          <div class="fh5co-contact-info">
            <h3>Contact Information</h3>
            <ul>
              <li class="address">PUNE,<br> PUNE</li>
              <li class="phone"><a href="tel://08030656503">08030656503</a></li>
              <li class="email"><a href="mailto:vinod@taxivaxi.com">vinod@taxivaxi.com</a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-6 animate-box">
          <h3>Get In Touch</h3>
          <form method="post" action="">
            {{ csrf_field() }}
            <div class="row form-group">
              <div class="col-md-6">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" class="form-control" placeholder="Your firstname" required>
              </div>
              <div class="col-md-6">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" class="form-control" placeholder="Your lastname">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-6">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="form-control" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,3}$" title="Should be of the format: abc@xyz.com" placeholder="Your email address" required>
              </div>
              <div class="col-md-6">
                <label for="cno">Contact No</label>
                <input type="text" pattern="[0-9]{10}" id="cno" name="contact_no" class="form-control" placeholder="Your Contact No" title="Please Enter a Valid Contact Number" required>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label for="bname">Query</label>
                <textarea name="query" class="form-control"></textarea>
              </div>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Query Request" class="btn btn-lg btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
