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
            <label>PASSENGER DETAILS</label>



            <table class="table" id="table">
              <thead>
                <tr>
                  <th>Employee Name</th>
                  <th>Employee ID</th>
                  <th>Employee Contact</th>
                  <th>Employee Email</th>
                </tr>
              </thead>
              <tbody>
                @foreach($empdets as $empdet)
               <tr class="client-row" id="{{ $empdet->id }}">
                 <td>&nbsp;&nbsp;{{ $empdet->employeename }}</td>
                 <td>{{ $empdet->employeeid }}</td>
                 <td>{{ $empdet->employeecontact }}</td>
                 <td>{{ $empdet->employeeemail }}</td>
               </tr>
             @endforeach
           </tbody>
         </table>
         <a href="{{ route('Agent.active-unassigned-TaxiBookings') }}" class="custom-submit-btn btn btn-default">Back</a>
       </div>

       </div>
     </div>
   </div>
 </div>


  @include('agent.layouts.errors')
@endsection
