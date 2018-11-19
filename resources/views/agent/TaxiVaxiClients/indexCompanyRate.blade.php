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
            <label>COMPANY RATES</label>
            <table class="table" id="table">
              <thead>
                <tr>
                  <th>Company Name</th>
                  <th>City</th>
                  <th>Taxi Type</th>
                  <th>Tour Type</th>
                  <th>Package</th>
                  <th>Base Rate</th>
                  <th>Kms Included</th>
                  <th>Hours Included</th>
                  <th>Edit</th>
                  <th>Delete </th>
                </tr>
              </thead>
              <tbody>
                @foreach($companyrates as $companyrate)
               <tr class="client-row" id="{{ $companyrate->id }}">

                 <!-- <td>&nbsp;&nbsp;{{ $companyrate->company_id }}</td> -->

              @foreach($companys as $company)
                @if($company->id == $companyrate->company_id)
                <td>{{ $company->companyname }}</td>
                @endif
               @endforeach

                 <!-- <td>{{ $companyrate->city_id }}</td> -->
                @foreach($cities as $citie)
                  @if($citie->id == $companyrate->city_id)
                  <td>{{ $citie->name }}</td>
                  @endif
                @endforeach


                 <!-- <td>{{ $companyrate->taxi_type_id }}</td> -->
                 @foreach($taxi_types as $taxi_type)
                  @if($taxi_type->id == $companyrate->taxi_type_id)
                  <td>{{ $taxi_type->name }}</td>
                  @endif
                @endforeach
                 
                 <!-- <td>{{ $companyrate->tour_type }}</td> -->

                  @if($companyrate->tour_type == '1')
                  <td>Local</td>
                  @else
                  <td>Outstation</td>
                  @endif

                 <td>{{ $companyrate->package_name }}</td>
                 <td>{{ $companyrate->base_rate }}</td>
                 <td>{{ $companyrate->kms_included }}</td>
                 <td>{{ $companyrate->hours_included }}</td>
                 <td><a href="{{ route('Agent.show-TaxiVaxiclients_CompanyRate', ['id' => $companyrate->id]) }}">
                      Edit
                 </td>
                 <td class="details-col">
                   <a href="{{ route('Agent.delete-TaxiVaxiclients_CompanyRate', ['id' => $companyrate->id]) }}">
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
