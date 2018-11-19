@extends('agent.layouts.master')

@push('styles')
  @include('agent.layouts.styles.select2_styles')
@endpush

@section('content')
  @include('agent.layouts.nav')
  <div class="container">
    <div class="row">
      <div class="col-xs-9 client-create-wrap">
        <form id="updateTaxiVaxiClientForm" method="post" action="{{ route('Agent.edit-TaxiVaxiclients_CompanyRate',['id' => $companyrates->id]) }}">
          {{ csrf_field() }}
          <div class="row">
            <div class="form-head">
              <label>Modify Company Rates</label>
              <input type="submit" value="submit" class="custom-submit-btn btn btn-default" name="">
            </div>
            <div class="row client-create-row">
              <div class="col-lg-6 col-md-6 col-xs-12">
                <div>
                  <label>COMPANY NAME*</label>

                 <?php $selectedvalue=$companyrates->company_id  ?>
             <select name="company_id" class="form-control">

                 @foreach ($companys as $company)
                    <option value="{{$company->id}}" {{$selectedvalue == $company->companyname ? 'selected="selected"' : ''}}>{{ $company->companyname }} </option>
                 @endforeach

            </select>


                </div>
                <div>
                  <label>CITY</label>
                  <?php $selectedcitys=$companyrates->city_id  ?>
                  <select name="city_id" class="form-control">
                      @foreach ($cities as $citie)
                           <option value="{{ $citie->id }}" {{$selectedcitys == $citie->id ? 'selected="selected"' : ''}}>{{ $citie->name }} </option>
                      @endforeach

               </select>
                </div>
                <div>
                  <label>TAXI TYPE</label>
                  <?php $selectedtaxi=$companyrates->taxi_type_id  ?>
                  <select name="taxi_type_id" class="form-control">
                      @foreach ($taxitypes as $taxitype)
                           <option value="{{ $taxitype->id }}" {{$selectedtaxi == $taxitype->name ? 'selected="selected"' : ''}}>{{ $taxitype->name }} </option>
                      @endforeach

               </select>
                  
                </div>
                <div>
                  <label>TOUR TYPE</label>
                  <input type="text" class="form-control" name="tour_type" value="{{$companyrates->tour_type}}">
                </div>
                <div>
                  <label>PACKAGE</label>
                  <input type="text" class="form-control" name="package_name" value="{{$companyrates->package_name}}">
                </div>
                <div>
                  <label>BASE RATE</label>
                  <input type="number" class="form-control" name="base_rate" value="{{$companyrates->base_rate}}">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-xs-12">
                <div>
                  <label>Hours Included</label>
                  <input type="number" class="form-control" name="hours_included" value="{{$companyrates->hours_included}}">
                </div>
                <div>
                  <label>Kms Included</label>
                  <input type="number" class="form-control" name="kms_included" value="{{$companyrates->kms_included}}">
                </div>
                <div>
                  <label>Per Km Rate</label>
                  <input type="number" class="form-control" name="per_km_rate" value="{{$companyrates->per_km_rate}}">
                </div>
                <div>
                  <label>Per Hour Rate</label>
                  <input type="number" class="form-control" name="per_hour_rate" value="{{$companyrates->per_hour_rate}}">
                </div>
                <div>
                  <label>Night Driver Change</label>
                  <input type="number" class="form-control" name="night_driver_change" value="{{$companyrates->night_driver_change}}">
                </div>

              </div>
            </div>
          </div>


              <input type="hidden" name="id" value="{{$companyrates->id}}" class="form-control">
        </form>
   </div>
  </div>
</div>
  @include('agent.layouts.errors')
@endsection
@push('scripts')
  @include('agent.layouts.scripts.googleAutoComplete')
  <script>
    $(document).ready(function() {
      var options = {
          types: ['(cities)'],
          componentRestrictions: {country: "in"}
      };
      var input = document.getElementById('city');
      var autocomplete = new google.maps.places.Autocomplete(input, options);
    });
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>
@endpush
