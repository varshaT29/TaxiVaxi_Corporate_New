@extends('agent.layouts.master')

@push('styles')
  @include('agent.layouts.styles.dataTable_styles')
@endpush

@section('content')
  @include('agent.layouts.nav')

  <!-- Modal -->
  <div class="modal fade" id="cancelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cancel Booking</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <label>Do you want to Cancel this Booking ?</label>
          <form method="post" id="cancel-form" class="modal-cancel">
            {{ csrf_field() }}
            <textarea maxlength="150" name="cancel_reason" class="form-control" placeholder="Reason (Optional)" id="cancel_reason" ></textarea>
            <button type="submit" class="btn btn-default">Yes</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container profile-block">
    <div class="row">
      <div class="col-xs-12">
        <div class="table-wrap">
          <label>BOOKINGS</label>
          <table class="table" id="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Client</th>
                <th>Booking DateTime</th>
                <th>Pickup DateTime</th>
                <th>Pickup City</th>
                <th>Drop Location</th>
                <th>Tour Type</th>
                <th>Assign Driver/Taxi</th>
                <th>Passenger Details</th>
                <th>Cancel</th>
                <th>Details</th>
              </tr>
            </thead>
            <tbody>
              @foreach($bookings as $booking)
                <tr>
                  <td>{{ $booking->assessment_code }}</td>
                  <td>
                  @foreach($companys as $company)
                   @if($company->id == $booking->client_id)
                   {{ $company->companyname }}
                   @endif
                  @endforeach
                  </td>
                  <td>{{ $booking->bookdatetime }}</td>
                  <td>{{ $booking->pickup_datetime }}</td>
                  <td>
                  @foreach($cities as $city)
                   @if($city->id == $booking->pickup_city_id)
                   {{ $city->name }}
                   @endif
                  @endforeach
                  </td>
                  <td>{{ $booking->drop_location }}</td>
                  <td>
                  @if($booking->tour_type_id == '1') Radio
                    @elseif($booking->tour_type_id == '2') Local
                    @else Outstation
                  @endif
                  </td>
                  <td>
                    <a href="{{ route('Agent.assign-driver-taxi',['id' => $booking->id]) }}">
                      <i class="fa fa-taxi"></i>
                    </a>
                  </td>
                  <td>
                    <a href="{{ route('Agent.show-passengerdetail', ['id' => $booking->id]) }}">
                        <i class="fas fa-users"></i>
                  </td>
                 <td class="trash-col">
                    <a id="cancel_btn" onclick="cancelFunction(){ }" class="" data-toggle="modal" data-target="#cancelModal"><i class="fa fa-trash-alt"></i></a>
                  </td>
                 <td><a href="{{ route('Agent.edit-taxi-booking', ['id' => $booking->id]) }}">
                       View/Edit
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  @include('agent.layouts.scripts.dataTable_scripts')
  @include('agent.layouts.scripts.select2_scripts')

  <script>

  function cancelFunction(booking_id) {

              


  }

  </script>
@endpush
