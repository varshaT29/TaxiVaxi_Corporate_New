@extends('agent.layouts.master')

@push('styles')
  @include('agent.layouts.styles.select2_styles')
@endpush

@section('content')
  @include('agent.layouts.nav')
  <div class="container">
    <div class="row">
      <div class="col-xs-9 client-create-wrap">
        <form id="updateAgentForm" method="post" action="{{ route('Agent.edit-agent',['id' => $users->id]) }}">
          {{ csrf_field() }}
          <div class="row">
            <div class="form-head">
              <label>MODIFY AGENT DETAILS</label>
              <input type="submit" value="submit" class="custom-submit-btn btn btn-default" name="">
            </div>
            <div class="row client-create-row">
              <div class="col-lg-6 col-md-6 col-xs-12">
                <div>
                  <label>EMPLOYEE NAME*</label>
                  <input type="text" value="{{$users->name}}" class="form-control" name="name">
                </div>
                <div>
                  <label>EMPLOYEE ID</label>
                  <input type="text" value="{{$users->emp_id}}" class="form-control" name="emp_id">
                </div>
                <div>
                  <label>EMAIL</label>
                  <input type="text" value="{{$users->email}}" class="form-control" name="email">
                </div>
                <div>
                  <label>MOBILE</label>
                  <input type="number" value="{{$users->mobile}}" class="form-control" name="mobile">
                </div>
                <div>
                  <label>COMPANY</label>
                  <input type="text" value="{{$users->company}}" class="form-control" name="company">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="form-head">
                  <label>ACCESS DETAILS</label>
                </div>
                <div>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  <label>SUPER ADMIN</label>  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;
                 <input type="radio" name="superadmin" value="1" {{ (old('superadmin') != $users->superadmin) ? "CHECKED" : "" }}> Yes &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                 <input type="radio" name="superadmin" value="0" {{ (old('superadmin') == $users->superadmin) ? "CHECKED" : "" }}> No
                </div>
                <div>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  <label>TAXI BOOKING</label>  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="has_taxi_booking_access" value="1" {{ (old('has_taxi_booking_access') != $users->has_taxi_booking_access) ? "CHECKED" : "" }}> Yes &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="has_taxi_booking_access" value="0" {{ (old('has_taxi_booking_access') == $users->has_taxi_booking_access) ? "CHECKED" : "" }}> No
                </br></br>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  <label>BUS BOOKING</label>    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="has_bus_booking_access" value="1" {{ (old('has_bus_booking_access') != $users->has_bus_booking_access) ? "CHECKED" : "" }}> Yes &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="has_bus_booking_access" value="0" {{ (old('has_bus_booking_access') == $users->has_bus_booking_access) ? "CHECKED" : "" }}> No
                </br></br>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;   <label>TRAIN BOOKING</label>    &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                  <input type="radio" name="has_train_booking_access" value="1" {{ (old('has_train_booking_access') != $users->has_train_booking_access) ? "CHECKED" : "" }}> Yes &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="has_train_booking_access" value="0" {{ (old('has_train_booking_access') == $users->has_train_booking_access) ? "CHECKED" : "" }}> No
                </br></br>
                  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  <label>FLIGHT BOOKING</label>   &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="has_flight_booking_access" value="1" {{ (old('has_flight_booking_access') != $users->has_flight_booking_access) ? "CHECKED" : "" }}> Yes &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                    <input type="radio" name="has_flight_booking_access" value="0" {{ (old('has_flight_booking_access') == $users->has_flight_booking_access) ? "CHECKED" : "" }}> No
                </br></br>
                  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  <label>MEAL BOOKING</label>    &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="has_meal_booking_access" value="1" {{ (old('has_meal_booking_access') != $users->has_meal_booking_access) ? "CHECKED" : "" }}> Yes  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="has_meal_booking_access" value="0" {{ (old('has_meal_booking_access') == $users->has_meal_booking_access) ? "CHECKED" : "" }}> No
                </div>
                <div>
                  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  <label>BILLING ACCESS</label>   &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="has_billing_access" value="1" {{ (old('has_billing_access') != $users->has_billing_access) ? "CHECKED" : "" }}> Yes &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="has_billing_access" value="0" {{ (old('has_billing_access') == $users->has_billing_access) ? "CHECKED" : "" }}> No
                </div>
              </div>
            </div>
          </div>

          <div class="row client-add-row client-add-common-row">
            <div class="form-head">
              <label>SHIFT TIMINGS</label>
            </div>
            <div class="row">
              <div class="col-lg-3 col-md-3 col-xs-12">
                <div>
                  <label>SHIFT START</label>
                  <input type="time" value="{{$users->shift_timing_start}}" class="form-control" name="shift_timing_start">
                </div>
                <div>
                  <label>SHIFT END</label>
                  <input type="time" value="{{$users->shift_timing_end}}" class="form-control" name="shift_timing_end">
                </div>
              </div>
              </div>
            </div>

          <input type="hidden" name="id" value="{{$users->id}}" class="form-control">

        </form>
      </div>
      <div class="col-lg-3 col-md-3">
      </div>
    </div>
  </div>
</div>
  @include('agent.layouts.errors')
@endsection

@push('scripts')
  @include('agent.layouts.scripts.select2_scripts')
  <script>
    $(document).ready(function() {
      $(".select2-drop").select2();
    });
  </script>

  @include('agent.layouts.scripts.googleAutoComplete')
  <script>
    $(document).ready(function() {
      var input = document.getElementById('city');
      var options = {
        types: ['(cities)'],
        componentRestrictions: {country: "in"}
      };

      autocomplete = new google.maps.places.Autocomplete(input, options);
      autocomplete.addListener('place_changed', fillInAddressChanged);

      function fillInAddressChanged() { // Called after city>change event
          var place = window.autocomplete.getPlace();
          if(place)
            $('#city_check').val('ok');
      }

      $('#city').change(function() {
        $('#city_check').val('');
      });

      $('#addClientForm').submit(function () {
        if($('#city_check').val() != 'ok') {
          alert('Please select City from dropdown');
          return false;
        }
      });
    });
  </script>
@endpush
