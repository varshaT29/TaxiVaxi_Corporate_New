<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TaxiVaxi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('css/bootstrap.css') }}">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="/css/style-ori.css" /> -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{ URL::asset('css/sass.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datetimepicker.min.css') }}" />
    <link href="{{ URL::asset('css/select2.min.css') }}" rel="stylesheet" />

    @stack('styles')
  </head>

  <body>
    @include('agent.layouts.header')

    @if($flash = session('success-message'))
    <div class="alert-wrap">
      <div class="alert alert-success custom-alert-success" role="alert">
        <p>{{ $flash }}</p>
      </div>
    </div>
    @endif

    @if($flash = session('fail-message'))
    <div class="alert-wrap">
      <div class="alert alert-danger custom-alert-fail" role="alert">
        <p>{{ $flash }}</p>
      </div>
    </div>
    @endif

    @yield('content')

    @include('agent.layouts.footer')

    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap-datetimepicker.min.css') }}" />
    <link href="{{ URL::asset('css/select2.min.css') }}" rel="stylesheet" />
    <script src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/script.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <script src="{{ URL::asset('js/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/moment.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/transition.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/collapse.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    @stack('scripts')
  </body>
</html>
