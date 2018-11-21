@extends('agent.layouts.master')

@push('styles')
  @include('agent.layouts.styles.dataTable_styles')
@endpush

@section('content')
  @include('agent.layouts.nav')
  <div class="container profile-block">
      <div class="row">
        <div class="col-xs-12">
          <div class="table-wrap">
            <label>TAXI Bookings for today:</label>
            <table class="table" id="table">
              <thead>
                <tr>
                  <th>&nbsp;&nbsp;Company Name</th>
                  <th>Tour Type</th>
                  <th>Pickup Location</th>
                  <th>Drop Location</th>
                  <th>Pickup Date/Time</th>
                  <th>Booking Date/Time</th>
                  <th>Passenger Details</th>
                </tr>
              </thead>
              <tbody>
               
           </tbody>
         </table>
       </div>
     </div>
   </div>
 </div>


  @include('agent.layouts.errors')
@endsection

