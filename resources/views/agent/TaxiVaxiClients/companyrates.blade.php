@extends('agent.layouts.master')

@push('styles')
  @include('agent.layouts.styles.select2_styles')
@endpush

@section('content')
  @include('agent.layouts.nav')
  <div class="container">
    <div class="row">
      <div class="col-xs-9 client-create-wrap">
        <form id="addTaxiVaxiCompanyRate" method="post" action="{{ route('Agent.store-TaxiVaxiclients_CompanyRate') }}">
          {{ csrf_field() }}
          <div class="row">
            <div class="form-head">
              <label>ADD COMPANY RATES</label>
              <input type="submit" value="submit" class="custom-submit-btn btn btn-default" name="">
            </div>
            <div class="row client-create-row">
              <div class="col-lg-6 col-md-6 col-xs-12">
                <div>
                  <label>COMPANY NAME</label>
                     <select id="company_id" name="company_id" class="form-control">
                         @foreach ($companys as $company)
                         <option value="{{ $company->id }}" >{{ $company->companyname }} </option>
                         @endforeach

                  </select>
                </div>
                <div>
                  <label>CITY</label>
                  <!-- <input list="city_id" name="city_id" class="form-control"> -->
                  <select id="city_id" name="city_id" class="form-control">
                         
                    </select>
                </div>
                <div>
                  <label>TAXI TYPE</label>
                  <label>SELECT TAXI TYPE</label>
                  <!-- <input list="taxi_type_id" name="taxi_type_id" class="form-control"> -->
                  <select id="taxi_type_id" name="taxi_type_id" class="form-control">
                         
                  </select>
                </div>
                <div>
                  <label>TOUR TYPE</label>
                  <select name="tour_type" class="form-control">
                      <option value="Local">Local </option>
                      <option value="Outstation">Outstation </option>
                  </select>
                </div>
                <div>
                  <label>PACKAGE</label>
                  <input list="package_name" name="package_name" class="form-control">
                       <datalist id="package_name">
                       @foreach ($operatorspackages as $operatorspackage)
                              <option value="{{ $operatorspackage->package_name  }}">{{ $operatorspackage->package_name }} </option>
                         @endforeach

                 </datalist>
                </div>
                <div>
                  <label>BASE RATE</label>
                  <input type="number" placeholder="Base Rate" class="form-control" name="base_rate">
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-xs-12">
                <div>
                  <label>Hours Included</label>
                  <input type="number" placeholder="Hours Included" class="form-control" name="hours_included">
                </div>
                <div>
                  <label>Kms Included</label>
                  <input type="number" placeholder="Hours Included" class="form-control" name="kms_included">
                </div>
                <div>
                  <label>Per Km Rate</label>
                  <input type="number" placeholder="Per Km Rate" class="form-control" name="per_km_rate">
                </div>
                <div>
                  <label>Per Hour Rate</label>
                  <input type="number" placeholder="Per Hour Rate" class="form-control" name="per_hour_rate">
                </div>
                <div>
                  <label>Night Driver Change Rate</label>
                  <input type="number" placeholder="Night driver rate" class="form-control" name="night_driver_change">
                </div>
                   
              </div>
            </div>
          </div>


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
<script>    
$("#company_id").change(function(){
  $('#city_id').empty();
  $('#taxi_type_id').empty();
  var opid= $("#company_id").val();

  console.log(opid);


  $.ajaxSetup({
        headers:{
            'Authorization': "Bearer DFKcPI5aBgokQG66Ou2veEogGLzTvRM5IyyxPq6NXQvYBbFTb4Dwzta23TIp"
        }
    });
      
  $.get('/Taxivaxi_corporate_new/public/api/agents/Operator/'+opid+'/showcity', function(data)
  {
   alert(data);
    var arr = jQuery.parseJSON(data);

var cities = {!! json_encode($cities) !!};

      
    for (var ii = 0; ii < cities.length; ii++) {
        for (var i = 0; i < arr.length; i++) {
        console.log(arr[i].city_id);
       
          if(cities[ii].id == arr[i].city_id){
            alert("ok"+arr[i].city_id);

            $('#city_id').append($("<option  value='"+arr[i].city_id+"'>"+cities[ii].name+" </option>")); 
          }
    }
  } 
        
    });

  $.get('/Taxivaxi_corporate_new/public/api/agents/Operator/'+opid+'/showtaxitype', function(data)
  {
   alert(data);
    var arr = jQuery.parseJSON(data);

var taxi_type = {!! json_encode($taxitypes) !!};

      
    for (var ii = 0; ii < taxi_type.length; ii++) {
        for (var i = 0; i < arr.length; i++) {
        console.log(arr[i].taxi_type_id);
       
          if(taxi_type[ii].id == arr[i].taxi_type_id){
            alert(arr[i].taxi_type_id);

            $('#taxi_type_id').append($("<option value='"+arr[i].taxi_type_id+"'>"+taxi_type[ii].name+"</option>")); 
          }
    }
  } 
        
    });

});  
  
  
  </script>
@endpush
