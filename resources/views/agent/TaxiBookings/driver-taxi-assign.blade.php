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
        <form id="assignDriverTaxiForm" method="post" action="{{ route('Agent.store-TaxiBookings-driver-taxi',['id' => $bookings->id]) }}">
          {{ csrf_field() }}
          <div class="row">
            <div class="form-head">
              <label>ADD DRIVER/TAXI DETAILS</label>
              <input type="submit" value="submit" class="custom-submit-btn btn btn-default" name="">
            </div>
            <div class="row client-create-row">
              <div class="col-lg-6 col-md-6 col-xs-12">
                <div>
                  <label>Operator Name:</label>
                  <select id="operator_id" name="operator_id" class="form-control" value="operator_id">
                      @foreach ($operators as $operator)
                           <option value="{{ $operator->id  }}">{{ $operator->operator_name }} ({{ $operator->contact_no }})</option>
                      @endforeach
                  </select>
                </div>

                <div>
                  <label>Garage Location</label>
                  <input type="text" name="garage_location" placeholder="Garage Location" class="form-control" value="{{$bookings->garage_location}}">
                </div>

                <div>
                  <label>Garage Distance</label>
                  <input type="number" name="garage_distance" placeholder="Garage Distance" class="form-control" value="{{$bookings->garage_distance}}">
                </div>

                <div>
                  <label>Driver Name</label>
                  <input type="text" name="driver_name" placeholder="Driver Name" class="form-control" value="{{$bookings->driver_name}}">
                </div>

                <div>
                  <label>Driver Contact</label>
                  <input type="number" name="driver_contact" placeholder="Driver Contact" class="form-control" value="{{$bookings->driver_contact}}">
                </div>

                <div id="taxi_model">
                  <label>Taxi Model</label>
                  <select id="taxi_model_id" name="taxi_model_id" class="form-control">
                      @foreach ($taximodels as $taximodel)
                         @if($taximodel->taxi_type_id==$bookings->taxi_type_id)
                           <option value="{{ $taximodel->id  }}">{{ $taximodel->name }}</option>
                        @endif
                      @endforeach
                  </select>
                </div>

                <div>
                  <label>Taxi Reg. Number</label>
                  <input type="text" name="taxi_reg_no" placeholder="Registration Number" class="form-control" value="{{$bookings->taxi_reg_no}}">
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

  @include('agent.layouts.scripts.googleAutoComplete')
  <script>

  </script>
@endpush
