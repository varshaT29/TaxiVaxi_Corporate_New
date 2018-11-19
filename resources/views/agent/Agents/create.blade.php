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
        <form id="addAgentForm" method="post" action="{{ route('Agent.store-Agent') }}">
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
                 <input type='text' class="form-control time-input" id='datetimepicker1' name="shift_timing_start" required />
                </div>
                <div>
                  <label>SHIFT END</label>
                  <input type='text' class="form-control time-input" id='datetimepicker2' name="shift_timing_end" required />
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
  @include('agent.layouts.errors')
@endsection

@push('scripts')
@include('agent.layouts.scripts.dateTimePicker_scripts')
@include('agent.Agents.scripts.create')
@endpush
