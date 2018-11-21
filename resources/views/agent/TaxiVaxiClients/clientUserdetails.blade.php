@extends('agent.layouts.master')

@push('styles')
  @include('agent.layouts.styles.dataTable_styles')
@endpush

@section('content')
  @include('agent.layouts.nav')

  <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Users</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="addnewusers" id="adduser-form" class="modal-cancel">
            {{ csrf_field() }}
            <input type="text" name="employeeid" placeholder="User Id">
            <input type="text" name="employeename" placeholder="User Name">
            <input type="text" name="employeecontact" placeholder="User Contact">
            <input type="text" name="employeeemail" placeholder="User Email">
            
            <button type="submit" class="btn btn-default">Submit</button>
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
           <div class="form-head">
            <label>PASSENGER DETAILS</label>
               <a class="custom-submit-btn btn btn-default" data-toggle="modal" data-target="#addModal">add new users</a>
            <table class="table" id="table">
              <thead>
                <tr>
                  <th>User Name</th>
                  <th>User ID</th>
                  <th>User Contact</th>
                  <th>User Email</th>
                </tr>
              </thead>
              <tbody>
              @foreach($client_users as $client_user)
               <tr class="client-row" id="{{ $client_user->client_id }}">
                 <td>&nbsp;&nbsp;{{ $client_user->employeename }}</td>
                 <td>{{ $client_user->employeeid }}</td>
                 <td>{{ $client_user->employeecontact }}</td>
                 <td>{{ $client_user->employeeemail }}</td>
               </tr>
             @endforeach
           </tbody>
         </table>
         <a href="{{ route('Agent.TaxiVaxiclients') }}" class="custom-submit-btn btn btn-default">Close</a>
         </div>

       </div>

       </div>
     </div>
   </div>
 </div>


  @include('agent.layouts.errors')
@endsection

@push('scripts')
  <script>

  </script>
@endpush
