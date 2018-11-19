@extends('agent.layouts.master')

@push('styles')
  @include('agent.layouts.styles.select2_styles')
  @include('agent.layouts.styles.dateTimePicker_styles')
@endpush

@section('content')
  @include('agent.layouts.nav')
  <div class="container">
    <div class="row">
      <div class="col-xs-9 client-create-wrap">
        <form id="addTaxiBookingsForm" method="post" action="{{ route('Agent.store-TaxiBookings') }}">
          {{ csrf_field() }}
          <div class="row">
            <div class="form-head">
              <label>ADD TAXI BOOKINGS</label>
              <input type="submit" value="submit" class="custom-submit-btn btn btn-default" name="">
            </div>
            <div class="row client-create-row">
              <div class="col-lg-6 col-md-6 col-xs-12">
                <div>
                  <label>COMPANY NAME*</label>
                     <select id="company_id" name="company_id" class="form-control">
                        <option value="" selected>Select Company </option>
                         @foreach ($companys as $company)
<<<<<<< HEAD
                            <option value="{{ $company->id }}">{{ $company->companyname }} </option>
=======
                         <option value="{{ $company->companyname }}" {{ $company->companyname == $company->companyname ? 'selected' : ''}}>{{ $company->companyname }} </option>
>>>>>>> e7c6be825e9fe5449f49f6885374a9f26878b683
                         @endforeach

                  </select>
                </div>

                <div>
                  <label>TOUR TYPE</label>
                  <select id="tourtype" name="tourtype" class="form-control js-basic-single">
                      <option value="">Select Tour Type </option>
                      <option value="1">Radio </option>
                      <option value="2">Local </option>
                      <option value="3">Outstation </option>
                  </select>
                </div>
                
                <div id="tr_days" style="display: none"> 
                  <label>NO. OF DAYS</label>
                  <input class="form-control " type="number" id="days" name="days" value="1" />
                </div>
                
                <div id="tr_city" style="display: none">
                  <label>SELECT CITY</label>
                  <select name="city_id" id="city_id" data-rel="chosen" class="form-control js-basic-single" style="width: 100%" required>
	                    <option value="" selected>Select City</option>
                  </select>
                </div>

                <div id="tr_taxi_type">
                  <label>SELECT TEXI TYPE</label>
                  <select name="taxi_type_id" id="taxi_type_id" data-rel="chosen" class="form-control js-basic-single" style="width: 100%" required>
	                    <option value="" selected>Select Taxi Type</option>
                  </select>
                </div>
                
                <div id="tr_package">
                  <label>PACKAGE NAME</label>
                  <!-- <select name="package_id" id="package_id" data-rel="chosen" class="form-control" style="width:100%;">
                            		<option value="" selected>--Select Package--</option>
                  </select> -->
                  <input id="package_id" list="package_name" name="package_name" class="form-control">
                       <datalist id="package_id">
                       @foreach ($operatorspackages as $operatorspackage)
                              <option value="{{ $operatorspackage->package_name  }}">{{ $operatorspackage->package_name }} </option>
                         @endforeach

                 </datalist>
                </div>

                <div>
                  <label>PICKUP LOCATION</label>
                   
                  <input type="text" placeholder="Pickup Location" class="form-control" name="pickup_location">


                </div>
                
                <div id="tr_drop_location" >
                  <label >DROP LOCATION</label>
                  <input type="text" placeholder="Drop Location" class="form-control" name="drop_location">
                </div>

                
                <div>
                  <label>PICKUP DATE:TIME</label>
                  <div>
                    <input type='text' class="form-control date-time-input" id='datetimepicker2' name="pickupdatetime" required />
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-xs-12">

                <div>
                  <label>ASSESSMENT CODE</label>
                  <input type="text" placeholder="Assessment Code" class="form-control" name="assessmentcode">
                </div>
                <div>
                  <label>BILLING ENTITY</label>
                  <input type="text" placeholder="Billing Entity" class="form-control" name="billing_entity">
                </div>
                <div>
                  <label>REASON FOR BOOKING</label>
                  <input type="textarea" placeholder="Reason for Booking" class="form-control" name="reason_for_booking">
                </div>
                <div>
                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  <label>SEND SMS</label>  &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="send_sms" value="1"> Yes  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="send_sms" value="0"> No
                </div>
                <div>
                  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  <label>SEND EMAIL</label>   &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="radio" name="send_email" value="1"> Yes &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                  <input type="radio" name="send_email" value="0"> No
                </div>
              </div>
            </div>
          </div>
          <div class="row client-create-row">
            <div class="form-head">
              <label>SPOC & PASSENGER DETAILS</label>
            </div>
          <div class="row client-create-row">
            <div class="col-lg-6 col-md-6 col-xs-12">
              <div>
                <label>SELECT SPOC</label>
                <select name="spoc_id" id="spoc_id" class="form-control">
                    <option value="" selected>Select SPOC</option>
                </select>
              </div>


            <div>
                <label>EMPLOYEE DETAILS</label>
               
                <div class="row">
                  <div class="col-xs-12">
                  EMPCODE-NAME-CONTACT-EMAIL
                    
                    <div class="table-wrap">
                    <select class="select-css select2-custom-users" id="users" name="employees[]" multiple="multiple" required>
                    </select>

                 </div>
               </div>
             </div>
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
  @include('agent.layouts.scripts.dateTimePicker_scripts')
  @include('agent.TaxiBookings.scripts.create')
  @include('agent.layouts.scripts.googleAutoComplete')
  <script>
    $(".select2-custom-users").select2({
      tags: true,
      createTag: function (params) {

        var result = params.term.split("-");

        // if(params.term.indexOf(",") > 0 && result.length == 4) {
          if(result[0] == '') {
            // alert('Please enter employee id. Enter NA if not appllicable');
            return null;
          }

          if(result[1] == '') {
            // alert('Please enter name');
            return null;
          }

          if(!validatephone(result[2])) {
            return null;
          }

          if(!validateemail(result[3])) {
            return null;
          }

          return {
            id: params.term,
            text: params.term
          }

      }
    });

$("#tourtype").change(function()
	{
$(".js-basic-single").select2();
    var tt = $('#tourtype').val();
        alert(tt);
            switch(tt)
            {
              case '1':
              {
            $("#tr_drop_location").css('display','table-row');
            $("#tr_city").css('display','none');
            $("#tr_package").css('display','none');
            $("#drop_location").attr('required',true);
            $("#city_id").attr('required',false);
            $("#rate_id").attr('required',false);
            $("#tr_days").css('display','none');
            $("#days").attr('required',false);
            $("#tr_taxi_type").css('display','none');
            $("#taxi_type_id").attr('required',false);
            break;
          }
          case '2':
          {
            $("#tr_drop_location").css('display','table-row');
            $("#tr_city").css('display','table-row');
            $("#tr_package").css('display','table-row');
            $("#drop_location").attr('required',false);
            $("#city_id").attr('required',true);
            $("#rate_id").attr('required',true);
            $("#tr_days").css('display','none');
            $("#days").attr('required',false);
            $("#tr_taxi_type").css('display','table-row');
            $("#taxi_type_id").attr('required',true);
            break;
          }
          case '3':
          {
            $("#tr_drop_location").css('display','table-row');
            $("#tr_city").css('display','table-row');
            $("#tr_package").css('display','table-row');
            $("#drop_location").attr('required',true);
            $("#city_id").attr('required',true);
            $("#rate_id").attr('required',true);
            $("#tr_days").css('display','table-row');
            $("#days").attr('required',true);
            $("#tr_taxi_type").css('display','table-row');
            $("#taxi_type_id").attr('required',true);
            break;
          }
        }
});

$("#company_id").change(function(){
  $('#city_id').empty();
  $('#taxi_type_id').empty();
  $('#spoc_id').empty();
  var opid= $("#company_id").val();
  
  console.log(opid);


  $.ajaxSetup({
        headers:{
            'Authorization': "Bearer DFKcPI5aBgokQG66Ou2veEogGLzTvRM5IyyxPq6NXQvYBbFTb4Dwzta23TIp"
        }
    });
      
  $.get('/Taxivaxi_corporate_new/public/api/agents/Operator/'+opid+'/showcity', function(data)
  {
 //  alert(data);
    var arr = jQuery.parseJSON(data);

var cities = {!! json_encode($cities) !!};

      
    for (var ii = 0; ii < cities.length; ii++) {
        for (var i = 0; i < arr.length; i++) {
        console.log(arr[i].city_id);
       
          if(cities[ii].id == arr[i].city_id){
//alert(arr[i].city_id);

            $('#city_id').append($("<option  value='"+arr[i].city_id+"'>"+cities[ii].name+" </option>"));  
          }
    }
  } 
        
    });

  $.get('/Taxivaxi_corporate_new/public/api/agents/Operator/'+opid+'/showtaxitype', function(data)
  {
  // alert(data);
    var arr = jQuery.parseJSON(data);

var taxi_type = {!! json_encode($taxi_types) !!};

      
    for (var ii = 0; ii < taxi_type.length; ii++) {
        for (var i = 0; i < arr.length; i++) {
        console.log(arr[i].taxi_type_id);
       
          if(taxi_type[ii].id == arr[i].taxi_type_id){
          //  alert(arr[i].taxi_type_id);

          $('#taxi_type_id').append($("<option value='"+arr[i].taxi_type_id+"'>"+taxi_type[ii].name+"</option>"));  
          }
    }
  } 
        
    });


  $.get('/Taxivaxi_corporate_new/public/api/agents/TaxiBookings/'+opid+'/getallCompanyspoc', function(data)
  {
    //alert(data);
    var arr = jQuery.parseJSON(data);
    
        for (var i = 0; i < arr.length; i++) {
          
          $('#spoc_id').append($("<option value='"+arr[i].id+"'>"+arr[i].user_name+"</option>"));  
          
    }
          
    });


  $.get('/Taxivaxi_corporate_new/public/api/agents/TaxiBookings/'+opid+'/getallemployee', function(data)
  {
    //alert(data);
    var arr = jQuery.parseJSON(data);
    
        for (var i = 0; i < arr.length; i++) {
          var t = arr[i].id + '-' + arr[i].employeename + '-' + arr[i].employeecontact + '-' + arr[i].employeeemail;
          $('#users').append($("<option value='"+t+"'>"+t+"</option>"));  
          
    }
          
    });

});
  </script>
@endpush
