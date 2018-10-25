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
              <h1 class="mb30" style="margin-bottom: 200px !important">Register with Us</h1>
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
              <li class="address">562 A, Lado Sarai, M G Road,<br> New Delhi, Delhi 110030</li>
              <li class="phone"><a href="tel://08030656503">08030656503</a></li>
              <li class="email"><a href="mailto:support@fleet247.in">support@fleet247.in</a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-6 animate-box">
          <h3>Registration Information</h3>
          <form method="post" action="{{ route('store-signup') }}">
            {{ csrf_field() }}
            <div class="row form-group">
              <div class="col-md-6">
                <label for="fname">First Name *</label>
                <input type="text" id="fname" name="fname" class="form-control" placeholder="Your firstname" required>
              </div>
              <div class="col-md-6">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" class="form-control" placeholder="Your lastname">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-6">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,3}$" title="Should be of the format: abc@xyz.com" class="form-control" placeholder="Your email address" required>
              </div>
              <div class="col-md-6">
                <label for="cno">Contact No *</label>
                <input type="text" pattern="[0-9]{10}" id="cno" name="contact_no" class="form-control" placeholder="Your Contact No" title="Please Enter a Valid Contact Number" required>
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label for="bname">Registered Business Name</label>
                <input type="text" id="bname" name="registered_name" class="form-control" placeholder="Your Registered Business Name">
              </div>
            </div>

            <div class="row form-group">
              <div class="col-md-12">
                <label for="bname">Comments</label>
                <textarea type="text" id="comments" name="comments" class="form-control" placeholder="Comments"></textarea>
              </div>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Signup Request" class="btn btn-lg btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
