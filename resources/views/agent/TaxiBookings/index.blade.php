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
                @foreach($bookings as $booking)

                 <tr class="client-row" id="{{ $booking->id }}">
                 <td>&nbsp;&nbsp;{{ $booking->taxibooking_companyname }}</td>
                 <td>{{ $booking->tourtype }}</td>
                 <td>{{ $booking->pickup_location }}</td>
                 <td>{{ $booking->drop_location }}</td>
                 <td>{{ $booking->pickupdatetime }}</td>
                 <td>{{ $booking->bookingdatetime }}</td>
                 <td class="details-col">
                   <a href="{{ route('Agent.show-passengerdetail',['id' => $booking->id]) }}">
                     <i class="fas fa-users"></i>
                   </a>
                 </td>
               </tr>
             @endforeach
           </tbody>
         </table>
       </div>
     </div>
   </div>
 </div>


  @include('agent.layouts.errors')
@endsection
