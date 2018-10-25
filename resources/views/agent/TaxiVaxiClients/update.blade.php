@extends('operator.layouts.master')

@push('styles')
  @include('operator.layouts.styles.select2_styles')
@endpush

@section('content')
  @include('operator.layouts.nav')
  <div class="container">
    <div class="row">
      <div class="col-xs-9 client-create-wrap">
        <form id="updateTaxiVaxiClientForm" method="post" action="{{ route('operator.edit-TaxiVaxiclients',['id' => $companys->id]) }}">
          {{ csrf_field() }}
          <div class="row">
            <div class="form-head">
              <label>MODIFY CLIENT DETAILS</label>
              <input type="submit" value="submit" class="custom-submit-btn btn btn-default" name="">
            </div>
            <div class="row client-create-row">
              <div class="col-lg-6 col-md-6 col-xs-12">
                <div>
                  <label>COMPANY NAME*</label>
                  <input type="text" class="form-control" name="companyname" value="{{$companys->companyname}}">
                </div>
                <div>
                  <label>CLIENT CODE</label>
                  <input type="text" class="form-control" name="companycode" value="{{$companys->companycode}}">
                </div>
                <div>
                  <label>CONTACT PERSON</label>
                  <input type="text" class="form-control" name="contactperson" value="{{$companys->contactperson}}">
                </div>
                <div>
                  <label>CONTACT NUMBER</label>
                  <input type="number" class="form-control" name="contactnumber" value="{{$companys->contactnumber}}">
                </div>
                <div>
                  <label>EMAIL</label>
                  <input type="text" class="form-control" name="contactemail" value="{{$companys->contactemail}}">
                </div>
                <div>
                  <label>PASSWORD</label>
                  <input type="text" class="form-control" name="companypassword" value="{{$companys->companypassword}}">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-xs-12">
                <div class="form-head">
                  <label>BILLING DETAILS</label>
                </div>
                <div>
                  <label>BILLING ENTITY NAME*</label>
                  <input type="text" class="form-control" name="companybillingname" value="{{$companys->companybillingname}}">
                </div>
                <div>
                  <label>ADDRESS</label>
                  <input type="textarea" class="form-control" name="companybillingaddress" value="{{$companys->companybillingaddress}}">
                </div>
                <div>
                  <label>GSTIN</label>
                  <input type="text" class="form-control" name="companygst" value="{{$companys->companygst}}">
                </div>

                <div>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  <label>SPOC APPROVAL</label>  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="spoc_approval" value="1" {{ (old('spoc_approval') != $companys->spoc_approval) ? "CHECKED" : "" }}> Yes &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                <input type="radio" name="spoc_approval" value="0" {{ (old('spoc_approval') == $companys->spoc_approval) ? "CHECKED" : "" }}> No
                </div>
                <div>
                  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  <label>ADMIN APPROVAL</label>  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="admin_approval" value="1" {{ (old('admin_approval') != $companys->admin_approval) ? "CHECKED" : "" }}> Yes &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="admin_approval" value="0" {{ (old('admin_approval') == $companys->admin_approval) ? "CHECKED" : "" }}> No
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
                <label>HAS APPROVER LEVEL</label>    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="radio" name="hasapproverlevel" value="1" {{ (old('hasapproverlevel') != $companys->hasapproverlevel) ? "CHECKED" : "" }}> Yes &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                <input type="radio" name="hasapproverlevel" value="0" {{ (old('hasapproverlevel') == $companys->hasapproverlevel) ? "CHECKED" : "" }}> No
                </br></br>
                  <label>HAS BOTH APPROVERS</label>    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="hasbothapprover" value="1" {{ (old('hasbothapprover') != $companys->hasbothapprover) ? "CHECKED" : "" }}> Yes &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="hasbothapprover" value="0" {{ (old('hasbothapprover') == $companys->hasbothapprover) ? "CHECKED" : "" }}> No
                </br></br>
                  <!-- <label>HAS NO APPROVER</label>   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="hasnoapprover" value="1" {{ (old('hasnoapprover') != $companys->hasnoapprover) ? "CHECKED" : "" }}> Yes &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="hasnoapprover" value="0" {{ (old('hasnoapprover') == $companys->hasnoapprover) ? "CHECKED" : "" }}> No
                </br></br> -->
                <label>RADIO BOOKING</label>  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="radio_booking" value="1" {{ (old('radio_booking') != $companys->radio_booking) ? "CHECKED" : "" }}> Yes &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="radio_booking" value="0" {{ (old('radio_booking') == $companys->radio_booking) ? "CHECKED" : "" }}> No
                </div>
                <div>
                 <label>LOCAL BOOKING</label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="local_booking" value="1" {{ (old('local_booking') != $companys->local_booking) ? "CHECKED" : "" }}> Yes &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="local_booking" value="0" {{ (old('local_booking') == $companys->local_booking) ? "CHECKED" : "" }}> No
                </div>
                <div>
                   <label>OUTSTATION BOOKING</label>   &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="outstation_booking" value="1" {{ (old('outstation_booking') != $companys->outstation_booking) ? "CHECKED" : "" }}> Yes &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="outstation_booking" value="0" {{ (old('outstation_booking') == $companys->outstation_booking) ? "CHECKED" : "" }}> No
                </div>
              </div>

            <div class="col-lg-6 col-md-6 col-xs-12">

                <div>
                 <label>BUS BOOKING</label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="bus_booking" value="1" {{ (old('bus_booking') != $companys->bus_booking) ? "CHECKED" : "" }}> Yes &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="bus_booking" value="0" {{ (old('bus_booking') == $companys->bus_booking) ? "CHECKED" : "" }}> No
                </div>
                <div>
                <label>TRAIN BOOKING</label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="train_booking" value="1" {{ (old('train_booking') != $companys->train_booking) ? "CHECKED" : "" }}> Yes &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="train_booking" value="0" {{ (old('train_booking') == $companys->train_booking) ? "CHECKED" : "" }}> No
                </div>
                <div>
                  <label>FLIGHT BOOKING</label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="flight_booking" value="1" {{ (old('flight_booking') != $companys->flight_booking) ? "CHECKED" : "" }}> Yes &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="flight_booking" value="0" {{ (old('flight_booking') == $companys->flight_booking) ? "CHECKED" : "" }}> No
                </div>
                <div>
                 <label>HOTEL BOOKING</label> &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="hotel_booking" value="1" {{ (old('hotel_booking') != $companys->hotel_booking) ? "CHECKED" : "" }}> Yes &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="hotel_booking" value="0" {{ (old('hotel_booking') == $companys->hotel_booking) ? "CHECKED" : "" }}> No
                </div>


              </div>
              </div>
            </div>
              <input type="hidden" name="id" value="{{$companys->id}}" class="form-control">
        </form>

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
