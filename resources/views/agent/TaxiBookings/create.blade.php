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
                     <select name="taxibooking_companyname" class="form-control">
                         @foreach ($companys as $company)
                              <option value="{{ $company->companyname  }}" {{old('companys') == $company ? 'selected' : ''}}>{{ $company->companyname }} </option>
                         @endforeach

                  </select>
                </div>
                <div>
                  <label>TOUR TYPE</label>
                  <select name="tourtype" class="form-control">
                      <option value="Radio">Radio </option>
                      <option value="Local">Local </option>
                      <option value="Outstation">Outstation </option>
                  </select>
                </div>
                <div>
                  <label>PICKUP LOCATION</label>
                   
                  <input type="text" placeholder="Pickup Location" class="form-control" name="pickup_location">


                </div>
                <div>
                  <label>DROP LOCATION</label>
                  <input type="text" placeholder="Drop Location" class="form-control" name="drop_location">
                </div>
                <div class="formCreate__form-group">
                  <label>BOOKING DATE:TIME</label>
                  <div>
                    <input type='text' class="form-control date-time-input" id='datetimepicker1' name="bookingdatetime" required />
                  </div>
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
                <select name="spocname" class="form-control">
                    <option value="SPOC1">SPOC1</option>
                    <option value="SPOC2">SPOC2 </option>
                    <option value="SPOC3">SPOC3</option>
                </select>
              </div>
              <div>
                <label>NUMBER OF SEATS</label>
                <select name="no_of_seats" id="no_of_seats" class="form-control">
                  <option value="">Select option </option>
		    					<option value="1">1</option>
		    					<option value="2">2</option>
		    					<option value="3">3</option>
		    					<option value="4">4</option>
		    					<option value="5">5</option>
		    					<option value="6">6</option>
		    				</select>
              </div>

            <div>
                <label>EMPLOYEE DETAILS</label>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="table-wrap">
                      <table class="table" id="table1" style="visibility:hidden;">
                        <tbody>
                          <tr class="client-row">
                           <td><input type="text" placeholder="Name" class="form-control" name="employeename[]"></td>
                           <td><input type="text" placeholder="ID" class="form-control" name="employeeid[]"></td>
                           <td><input type="number" placeholder="Mobile" class="form-control" name="employeecontact[]"></td>
                           <td><input type="text" placeholder="Email" class="form-control" name="employeeemail[]"> </td>
                         </tr>
                       </tbody>
                     </table>
                     <table class="table" id="table2" style="visibility:hidden;">
                       <tbody>
                         <tr class="client-row">
                          <td><input type="text" placeholder="Name" class="form-control" name="employeename[]"></td>
                          <td><input type="text" placeholder="ID" class="form-control" name="employeeid[]"></td>
                          <td><input type="number" placeholder="Mobile" class="form-control" name="employeecontact[]"></td>
                          <td><input type="text" placeholder="Email" class="form-control" name="employeeemail[]"> </td>
                        </tr>
                      </tbody>
                    </table>
                    <table class="table" id="table3" style="visibility:hidden;">
                      <tbody>
                        <tr class="client-row">
                         <td><input type="text" placeholder="Name" class="form-control" name="employeename[]"></td>
                         <td><input type="text" placeholder="ID" class="form-control" name="employeeid[]"></td>
                         <td><input type="number" placeholder="Mobile" class="form-control" name="employeecontact[]"></td>
                         <td><input type="text" placeholder="Email" class="form-control" name="employeeemail[]"> </td>
                       </tr>
                     </tbody>
                   </table>
                   <table class="table" id="table4" style="visibility:hidden;">
                     <tbody>
                       <tr class="client-row">
                        <td><input type="text" placeholder="Name" class="form-control" name="employeename[]"></td>
                        <td><input type="text" placeholder="ID" class="form-control" name="employeeid[]"></td>
                        <td><input type="number" placeholder="Mobile" class="form-control" name="employeecontact[]"></td>
                        <td><input type="text" placeholder="Email" class="form-control" name="employeeemail[]"> </td>
                      </tr>
                    </tbody>
                  </table>
                  <table class="table" id="table5" style="visibility:hidden;">
                    <tbody>
                      <tr class="client-row">
                       <td><input type="text" placeholder="Name" class="form-control" name="employeename[]"></td>
                       <td><input type="text" placeholder="ID" class="form-control" name="employeeid[]"></td>
                       <td><input type="number" placeholder="Mobile" class="form-control" name="employeecontact[]"></td>
                       <td><input type="text" placeholder="Email" class="form-control" name="employeeemail[]"> </td>
                     </tr>
                   </tbody>
                 </table>
                 <table class="table" id="table6" style="visibility:hidden;">
                   <tbody>
                     <tr class="client-row">
                      <td><input type="text" placeholder="Name" class="form-control" name="employeename[]"></td>
                      <td><input type="text" placeholder="ID" class="form-control" name="employeeid[]"></td>
                      <td><input type="number" placeholder="Mobile" class="form-control" name="employeecontact[]"></td>
                      <td><input type="text" placeholder="Email" class="form-control" name="employeeemail[]"> </td>
                    </tr>
                     </tbody>
                   </table>
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

  $("#no_of_seats").change(function()
   {
            var count =  $("#no_of_seats").val();
            console.log(count);
            if(count=="1"){
             document.getElementById("table1").style.visibility = "visible";
             document.getElementById("table2").style.visibility = "hidden";
             document.getElementById("table3").style.visibility = "hidden";
             document.getElementById("table4").style.visibility = "hidden";
             document.getElementById("table5").style.visibility = "hidden";
             document.getElementById("table6").style.visibility = "hidden";
           }
           if(count=="2")
           {
            document.getElementById("table1").style.visibility = "visible";
            document.getElementById("table2").style.visibility = "visible";
            document.getElementById("table3").style.visibility = "hidden";
            document.getElementById("table4").style.visibility = "hidden";
            document.getElementById("table5").style.visibility = "hidden";
            document.getElementById("table6").style.visibility = "hidden";
          }
            if(count=="3")
            {
             document.getElementById("table1").style.visibility = "visible";
             document.getElementById("table2").style.visibility = "visible";
             document.getElementById("table3").style.visibility = "visible";
             document.getElementById("table4").style.visibility = "hidden";
             document.getElementById("table5").style.visibility = "hidden";
             document.getElementById("table6").style.visibility = "hidden";
           }
             if(count=="4")
             {
              document.getElementById("table1").style.visibility = "visible";
              document.getElementById("table2").style.visibility = "visible";
              document.getElementById("table3").style.visibility = "visible";
              document.getElementById("table4").style.visibility = "visible";
              document.getElementById("table5").style.visibility = "hidden";
              document.getElementById("table6").style.visibility = "hidden";
            }
              if(count=="5")
              {
               document.getElementById("table1").style.visibility = "visible";
               document.getElementById("table2").style.visibility = "visible";
               document.getElementById("table3").style.visibility = "visible";
               document.getElementById("table4").style.visibility = "visible";
               document.getElementById("table5").style.visibility = "visible";
               document.getElementById("table6").style.visibility = "hidden";
             }
               if(count=="6")
               {
                document.getElementById("table1").style.visibility = "visible";
                document.getElementById("table2").style.visibility = "visible";
                document.getElementById("table3").style.visibility = "visible";
                document.getElementById("table4").style.visibility = "visible";
                document.getElementById("table5").style.visibility = "visible";
                document.getElementById("table6").style.visibility = "visible";
              }
              for($i=0;$i<count;$i++)
              {

              }


    });
  </script>
@endpush
