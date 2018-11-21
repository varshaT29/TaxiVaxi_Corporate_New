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
            <label>TAXIVAXI OPERATORS</label>
            <table class="table" id="table">
              <thead>
                <tr>
                  <th>Agent Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>Website</th>
                  <th>More info..</th>
                  <th>Edit</th>
                  <th>Delete </th>
                </tr>
              </thead>
              <tbody>
                 
                @foreach($operators as $operator)
               <tr class="client-row" id="{{ $operator->id }}">
                 <td>&nbsp;&nbsp;{{ $operator->operator_name }}</td>
                 <td>{{ $operator->operator_email }}</td>
                 <td>{{ $operator->operator_contact }}</td>
                 <td>{{ $operator->website }}</td>
                 <td class="details-col">
                   <a href="{{ route('Operator.show-operator', ['id' => $operator->id]) }}">
                     <i class="fas fa-info"></i>
                   </a>
                 </td>
                 <td><a href="{{ route('Operator.show-operator', ['id' => $operator->id]) }}">
                      Edit
                 </td>
                 <td class="details-col">
                  <a href="{{ route('Operator.delete-operator', ['id' => $operator->id]) }}">
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