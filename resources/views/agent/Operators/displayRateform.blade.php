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
            <label>OPERATORS RATE LIST</label>
            <table class="table" id="table">
              <thead>
                <tr>
                  <th>Operator Name</th>
                  <th>Package Name</th>
                  <th>City</th>
                  <th>Taxi Type</th>
                  <th>Tour Type</th>
                  <th>Kms Included</th>
                  <th>Hours Included</th>
                  <th>Extra Rate/Km(Rs.)</th>
                  <th>Per Hours Rate(Rs.)</th>
                  <th>Base Rate(Rs.)</th>
                  <th>Night Rate(Rs.)</th>
                  <th>Fuel Rate(Rs.)</th> 
                  <th>Edit</th>
                  <th>Delete </th>
                </tr>
              </thead>
              <tbody>
                 
                @foreach($operatorsrates as $operatorsrate)
               <tr class="client-row" id="{{ $operatorsrate->id }}">
                
               @foreach($operators as $operator)
                @if($operator->id == $operatorsrate->operator_id)
                <td>{{ $operator->operator_name }}</td>
                @endif
               @endforeach

              
                 
                 <td>{{ $operatorsrate->package_name }}</td>
                
                 @foreach($cities as $citie)
                  @if($citie->id == $operatorsrate->city_id)
                  <td>{{ $citie->name }}</td>
                  @endif
                @endforeach
                

                @foreach($taxi_types as $taxi_type)
                  @if($taxi_type->id == $operatorsrate->taxi_type_id)
                  <td>{{ $taxi_type->name }}</td>
                  @endif
                @endforeach

                 

                  @if($operatorsrate->tour_type == '1')
                  <td>Local</td>
                  @else
                  <td>Outstation</td>
                  @endif

                 <td>{{ $operatorsrate->kms }}</td>
                 <td>{{ $operatorsrate->hours }}</td>
                 <td>{{ $operatorsrate->km_rate }}</td>
                 <td>{{ $operatorsrate->hour_rate }}</td>
                 <td>{{ $operatorsrate->base_rate }}</td>
                 <td>{{ $operatorsrate->night_rate }}</td>
                 <td>{{ $operatorsrate->fuel_rate }}</td>
                 
                
                 <td><a href="{{ route('Operator.edit-rateform', ['id' => $operatorsrate->id]) }}">
                      Edit
                 </td>
                 <td class="details-col">
                  <a href="{{ route('Operator.delete-rateform', ['id' => $operatorsrate->id]) }}">
                    <i class="fas fa-trash"></i>
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
@push('scripts')
  @include('agent.layouts.scripts.dataTable_scripts')
  @include('agent.layouts.scripts.select2_scripts')

  <script>
    function cancelFunction(booking_id) {
      $("#cancel-form").attr("action", "/agent/taxi-bookings/"+booking_id+"/cancel/");
    }
  </script>
@endpush