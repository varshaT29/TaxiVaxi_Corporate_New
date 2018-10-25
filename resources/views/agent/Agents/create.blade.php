@extends('operator.layouts.master')



@push('styles')
  @include('operator.layouts.styles.select2_styles')
@endpush



@section('content')

  @include('operator.layouts.nav')
  
  <div class="container">
    <div class="row">
      <div class="col-xs-9 client-create-wrap">
        <form id="addAgentForm" method="post" action="{{ route('operator.store-Agent') }}">
          {{ csrf_field() }}
          <div class="row">
            <div class="form-head">
              <label>ADD AGENT DETAILS</label>
              <input type="submit" value="submit" class="custom-submit-btn btn btn-default" name="">
            </div>
            <div class="row client-create-row">
              <div class="col-lg-6 col-md-6 col-xs-12">
                <div>
                  <label>EMPLOYEE NAME*</label>
                  <input type="text" placeholder="Employee Name" class="form-control" name="name">
                </div>
                <div>
                  <label>EMPLOYEE ID</label>
                  <input type="text" placeholder="Employee ID" class="form-control" name="emp_id">
                </div>
                <div>
                  <label>EMAIL</label>
                  <input type="text" placeholder="Email" class="form-control" name="email">
                </div>
                <div>
                  <label>MOBILE</label>
                  <input type="number" placeholder="Mobile" class="form-control" name="mobile">
                </div>
                <div>
                  <label>COMPANY</label>
                  <input type="text" placeholder="Company" class="form-control" name="company">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="form-head">
                  <label>ACCESS DETAILS</label>
                </div>
                <div>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  <label>SUPER ADMIN</label>  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="superadmin" value="1"> Yes  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="superadmin" value="0"> No
                </div>
                <div>
                  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  <label>TAXI BOOKING</label>  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="has_taxi_booking_access" value="1"> Yes &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="has_taxi_booking_access" value="0"> No
                </br></br>
                  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  <label>BUS BOOKING</label>    &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="has_bus_booking_access" value="1"> Yes  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="has_bus_booking_access" value="0"> No
                </br></br>
                  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;   <label>TRAIN BOOKING</label>    &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                  <input type="radio" name="has_train_booking_access" value="1"> Yes  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="has_train_booking_access" value="0"> No
                </br></br>
                  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  <label>FLIGHT BOOKING</label>   &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="has_flight_booking_access" value="1"> Yes   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="has_flight_booking_access" value="0"> No
                </br></br>
                  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  <label>MEAL BOOKING</label>    &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="has_meal_booking_access" value="1"> Yes   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="has_meal_booking_access" value="0"> No
                </div>
                <div>
                  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  <label>BILLING ACCESS</label>   &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="has_billing_access" value="1"> Yes   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="has_billing_access" value="0"> No
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
                  <input type="time" class="form-control" name="shift_timing_start">
                </div>
                <div>
                  <label>SHIFT END</label>
                  <input type="time" class="form-control" name="shift_timing_end">
                </div>
              </div>
              </div>
            </div>


        </form>
      </div>
      <div class="col-lg-3 col-md-3">
      </div>
    </div>
  </div>
</div>
  @include('operator.layouts.errors')
@endsection

@push('scripts')
  @include('operator.layouts.scripts.select2_scripts')
  <script>
    $(document).ready(function() {
      $(".select2-drop").select2();
    });
  </script>

  @include('operator.layouts.scripts.googleAutoComplete')
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
