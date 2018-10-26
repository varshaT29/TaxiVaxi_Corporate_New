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
            <label>TAXIVAXI CLIENTS</label>
            <table class="table" id="table">
              <thead>
                <tr>
                  <th>Company Name</th>
                  <th>Contact Person</th>
                  <th>Contact Number</th>
                  <th>Email</th>
                  <th>SPOC Approval</th>
                  <th>Admin Approval</th>
                  <th>Management Settings</th>
                  <th>Edit</th>
                </tr>
              </thead>
              <tbody>
                @foreach($companys as $company)
               <tr class="client-row" id="{{ $company->id }}">
                 <td>&nbsp;&nbsp;{{ $company->companyname }}</td>
                 <td>{{ $company->contactperson }}</td>
                 <td>{{ $company->contactnumber }}</td>
                 <td>{{ $company->contactemail }}</td>
                 <td>{{ $company->spoc_approval }}</td>
                 <td>{{ $company->admin_approval }}</td>
                 <td class="details-col">
                   <a href="{{ route('Agent.show-TaxiVaximgmtfee',['id' => $company->id]) }}">
                     <i class="fas fa-cog"></i>
                   </a>
                 </td>
                 <td><a href="{{ route('Agent.show-TaxiVaxiclients', ['id' => $company->id]) }}">
                      Edit
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
