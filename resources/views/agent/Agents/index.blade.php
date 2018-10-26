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
            <label>TAXIVAXI AGENTS</label>
            <table class="table" id="table">
              <thead>
                <tr>
                  <th>Agent Name</th>
                  <th>Email</th>
                  <th>Mobile</th>
                  <th>SuperAdmin</th>
                  <th>more info..</th>
                  <th>Edit</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
               <tr class="client-row" id="{{ $user->id }}">
                 <td>&nbsp;&nbsp;{{ $user->name }}</td>
                 <td>{{ $user->email }}</td>
                 <td>{{ $user->mobile }}</td>
                 <td>{{ $user->superadmin }}</td>
                 <td class="details-col">
                   <a href="{{ route('Agent.show-agent', ['id' => $user->id]) }}">
                     <i class="fas fa-info"></i>
                   </a>
                 </td>
                 <td><a href="{{ route('Agent.show-agent', ['id' => $user->id]) }}">
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
