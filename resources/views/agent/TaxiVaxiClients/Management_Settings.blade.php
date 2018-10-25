@extends('operator.layouts.master')

@push('styles')
  @include('operator.layouts.styles.select2_styles')
@endpush

@section('content')
  @include('operator.layouts.nav')
  <div class="container">
    <div class="row">
      <div class="col-xs-9 client-create-wrap">
        <form id="addTaxiVaxiManagementSettingsForm" method="post" action="{{ route('operator.edit-TaxiVaximgmtfee',['id' => $companys->id]) }}">
          {{ csrf_field() }}
          <div class="row">
            <div class="form-head">
              <label>MANAGEMENT SETTINGS</label>
              <input type="submit" value="submit" class="custom-submit-btn btn btn-default" id="submit">
            </div>
            <div class="row client-create-row">
              <div class="col-lg-6 col-md-6 col-xs-12">
                <div>
                  <label>Radio Booking Management Fee</label>
                  <input type="number" class="form-control" id="radio_booking_mgmt_fee" name="radio_booking_mgmt_fee" value="{{$companys->radio_booking_mgmt_fee}}" disabled>
                </div>
                <div>
                  <label>Local Booking Management Fee</label>
                  <input type="number" placeholder="Management Fee" id="local_booking_mgmt_fee" class="form-control" name="local_booking_mgmt_fee" value="{{$companys->local_booking_mgmt_fee}}" disabled>
                </div>
                <div>
                  <label>Outstation Booking Management Fee</label>
                  <input type="number" placeholder="Management Fee" id="outstation_booking_mgmt_fee" class="form-control" name="outstation_booking_mgmt_fee" value="{{$companys->outstation_booking_mgmt_fee}}" disabled>
                </div>
                <div>
                  <label>Bus Booking Management Fee</label>
                  <input type="number" placeholder="Management Fee" class="form-control" id="bus_booking_mgmt_fee" name="bus_booking_mgmt_fee" value="{{$companys->bus_booking_mgmt_fee}}" disabled>
                </div>
                <div>
                  <label>Train Booking Management Fee</label>
                  <input type="number" placeholder="Management Fee" class="form-control" id="train_booking_mgmt_fee" name="train_booking_mgmt_fee" value="{{$companys->train_booking_mgmt_fee}}" disabled>
                </div>
                <div>
                  <label>Flight Booking Management Fee</label>
                  <input type="number" placeholder="Management Fee" class="form-control" id="flight_booking_mgmt_fee" name="flight_booking_mgmt_fee" value="{{$companys->flight_booking_mgmt_fee}}" disabled>
                </div>
                <div>
                  <label>Hotel Booking Management Fee</label>
                  <input type="number" placeholder="Management Fee" class="form-control" id="hotel_booking_mgmt_fee" name="hotel_booking_mgmt_fee" value="{{$companys->hotel_booking_mgmt_fee}}" disabled>
                </div>
              </div>
            </div>
          </div>
              </form>
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
