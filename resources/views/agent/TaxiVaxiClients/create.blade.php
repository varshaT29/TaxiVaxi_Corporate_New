@extends('agent.layouts.master')

@push('styles')
  @include('agent.layouts.styles.select2_styles')
@endpush

@section('content')
  @include('agent.layouts.nav')
  <div class="container">
    <div class="row">
      <div class="col-xs-9 client-create-wrap">
        <form id="addTaxiVaxiClientForm" method="post" action="{{ route('Agent.store-TaxiVaxiclients') }}">
          {{ csrf_field() }}
          <div class="row">
            <div class="form-head">
              <label>ADD CLIENT DETAILS</label>
              <input type="submit" value="submit" class="custom-submit-btn btn btn-default" name="">
            </div>
            <div class="row client-create-row">
              <div class="col-lg-6 col-md-6 col-xs-12">
                <div>
                  <label>COMPANY NAME*</label>
                  <input type="text" placeholder="Company Name" class="form-control" name="companyname">
                </div>
                <div>
                  <label>CLIENT CODE</label>
                  <input type="text" placeholder="Client code" class="form-control" name="companycode">
                </div>
                <div>
                  <label>CONTACT PERSON</label>
                  <input type="text" placeholder="Contact person" class="form-control" name="contactperson">
                </div>
                <div>
                  <label>CONTACT NUMBER</label>
                  <input type="number" placeholder="Contact Number" class="form-control" name="contactnumber">
                </div>
                <div>
                  <label>EMAIL</label>
                  <input type="text" placeholder="Email" class="form-control" name="contactemail">
                </div>
                <div>
                  <label>PASSWORD</label>
                  <input type="text" placeholder="Password" class="form-control" name="companypassword">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="form-head">
                  <label>BILLING DETAILS</label>
                </div>
                <div>
                  <label>BILLING ENTITY NAME*</label>
                  <input type="text" placeholder="Billing Entity Name" class="form-control" name="companybillingname">
                </div>
                <div>
                  <label>ADDRESS</label>
                  <input type="textarea" placeholder="Address" class="form-control" name="companybillingaddress">
                </div>
                <div>
                  <label>GSTIN</label>
                  <input type="text" placeholder="GSTIN" class="form-control" name="companygst">
                </div>
                <div>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  <label>SPOC APPROVAL</label>  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="spoc_approval" value="1"> Yes  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="spoc_approval" value="0"> No
                </div>
                <div>
                  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  <label>ADMIN APPROVAL</label>  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="admin_approval" value="1"> Yes &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="admin_approval" value="0"> No
                </div>
              </div>
            </div>
          </div>
          <div class="row client-create-row">
            <div class="form-head">
              <label>ACCESS DETAILS</label>
            </div>
          <div class="row client-create-row">
            <div class="col-lg-6 col-md-6 col-xs-12">
              <div>
                <label>HAS APPROVER LEVEL</label>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="hasapproverlevel" value="1"> Yes  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="hasapproverlevel" value="0"> No
              </div>
              <div>
                <label>HAS BOTH APPROVERS</label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="hasbothapprover" value="1"> Yes  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="hasbothapprover" value="0"> No
              </div>
              <!-- <div>
                  <label>HAS NO APPROVER</label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="hasnoapprover" value="1"> Yes   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="hasnoapprover" value="0"> No
              </div> -->
              <div>
                  <label>RADIO BOOKING</label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="radio_booking" value="1"> Yes   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="radio_booking" value="0"> No
              </div>
              <div>
                  <label>LOCAL BOOKING</label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="local_booking" value="1"> Yes   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="local_booking" value="0"> No
              </div>
              <div>
                <label>OUTSTATION BOOKING</label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="outstation_booking" value="1"> Yes   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                <input type="radio" name="outstation_booking" value="0"> No
              </div>
            </div>

          <div class="col-lg-6 col-md-6 col-xs-12">

                <div>
                  <label>BUS BOOKING</label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="bus_booking" value="1"> Yes   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="bus_booking" value="0"> No
                </div>
                <div>
                  <label>TRAIN BOOKING</label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="train_booking" value="1"> Yes   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="train_booking" value="0"> No
                </div>
                <div>
                 <label>FLIGHT BOOKING</label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="flight_booking" value="1"> Yes   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="flight_booking" value="0"> No
                </div>
                <div>
                 <label>HOTEL BOOKING</label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="hotel_booking" value="1"> Yes   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="hotel_booking" value="0"> No
                 </div>
          </div>
        </div>
      </div>
        </form>

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
