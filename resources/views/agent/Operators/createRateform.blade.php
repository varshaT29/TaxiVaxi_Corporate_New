@extends('agent.layouts.master')



@push('styles')
  @include('agent.layouts.styles.select2_styles')
@endpush



@section('content')

  @include('agent.layouts.nav')
  
  <div class="container">
    <div class="row">
      <div class="col-xs-6 client-create-wrap">
        <form id="addAgentForm" method="post" action="{{ route('Operator.store-rateform') }}">
          {{ csrf_field() }}

          <div class = "panel panel-info">
            <div class = "panel-heading">
                <h3 class = "panel-title">ADD Operator Rates</h3>
                
            </div>
            
            <div class = "panel-body">
            <input type="submit" value="submit" class="custom-submit-btn btn btn-default" name="">
            <div>
                  <label>OPERATOR NAME*</label>
                     <select id="operator_id" name="operator_id" class="form-control">
                         @foreach ($operators as $operator)
                              <option value="{{ $operator->id  }}">{{ $operator->operator_name }} ({{ $operator->contact_no }})</option>
                         @endforeach

                  </select>
            </div>

            <div>
                  <label>SELECT CITY*</label>
                  <!-- <input list="city_id" name="city_id" class="form-control"> -->
                  <select id="city_id" name="city_id" class="form-control">
                      <option ><input type="hidden"></option>
                    </select>
            </div>

            <div>
                  <label>SELECT TAXI TYPE</label>
                  <!-- <input list="taxi_type_id" name="taxi_type_id" class="form-control"> -->
                  <select id="taxi_type_id" name="taxi_type_id" class="form-control">
                         
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
                  <label>TOUR TYPE</label>
                     <select name="tour_type" class="form-control">
                              <option value="local">Local</option>
                              <option value="outstation">Outstation</option>
                        
                  </select>
            </div>

            <div>
                  <label>BASE RATE</label>
                  <input type="number" placeholder="BASE RATE" class="form-control" name="base_rate">
            </div>

            <div>
                  <label>Hours Included</label>
                  <input type="number" placeholder="Hours Included" class="form-control" name="hour_rate">
            </div>

            <div>
                  <label>Kms Included</label>
                  <input type="number" placeholder="Kms Included" class="form-control" name="kms">
            </div>
            <div>
                  <label>Per Hour Rate</label>
                  <input type="number" placeholder="Per Hour Rate" class="form-control" name="hours">
            </div>
            <div>
                  <label>Per Km Rate</label>
                  <input type="number" placeholder="Per Km Rate" class="form-control" name="km_rate">
            </div>
            <div>
                  <label>Night/Driver Charge</label>
                  <input type="number" placeholder="Night/Driver Charge" class="form-control" name="night_rate">
            </div>
            <div>
                  <label>Fuel Charge</label>
                  <input type="number" placeholder="Fuel Charge" class="form-control" name="fuel_rate">
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
    function yesnoCheck(that) {
        if (that.value == "1") {
            alert("check");
            document.getElementById("ifYes").style.display = "block";
        } else {
            document.getElementById("ifYes").style.display = "none";
        }
    }

$("#operator_id").change(function(){
  $('#city_id').empty();
  $('#taxi_type_id').empty();
  var opid= $("#operator_id").val();
  
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
            alert(arr[i].city_id);

            $('#city_id').append($("<option  value='"+arr[i].city_id+"'>"+cities[ii].name+" </option>"));  
          }
    }
  } 
        
    });

  $.get('/Taxivaxi_corporate_new/public/api/agents/Operator/'+opid+'/showtaxitype', function(data)
  {
   alert(data);
    var arr = jQuery.parseJSON(data);

var taxi_type = {!! json_encode($taxi_types) !!};

      
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
