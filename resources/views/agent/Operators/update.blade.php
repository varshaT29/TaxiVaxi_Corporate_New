@extends('agent.layouts.master')



@push('styles')
  @include('agent.layouts.styles.select2_styles')
@endpush



@section('content')

  @include('agent.layouts.nav')
  
  <div class="container">
    <div class="row">
      <div class="col-xs-12 client-create-wrap">
        <form id="addAgentForm" method="post" action="{{ route('Operator.edit-operator',['id' => $operatordetails->id]) }}">
          {{ csrf_field() }}
          <div class="row">
            <div class="form-head">
              <label>MODIFIED OPERATORS DETAILS</label>
              <input type="submit" value="submit" class="custom-submit-btn btn btn-default" name="">
            </div>
            <div class="row">
              <div class="col-sm-4 panel panel-info">
                  <div class="panel-heading">
                  <label>PERSONAL DETAILS</label>
                </div>
                <div>
                  <label>COMPANY/OWNER NAME*</label>
                  <input type="text" placeholder="Employee Name" class="form-control" name="companyname" value="{{$operatordetails->operator_name}}">
                </div>
                <div>
                   <label>EMAIL</label>
                  <input type="text" placeholder="Email ID" class="form-control" name="email" value="{{$operatordetails->operator_email}}">
                </div>
                <div>
                  <label>CONTACT NO.</label>
                  <input type="number" placeholder="Contact No." class="form-control" name="contact" value="{{$operatordetails->operator_contact}}">
                </div>
                
                <div>
                  <label>OFFICE ADDRESS</label>
                  <input type="text" placeholder="Company" class="form-control" name="address" value="{{$operatordetails->operator_address}}">
                </div>
                  <div>
                  <label>WEBSITE</label>
                  <input type="text" placeholder="Company" class="form-control" name="website" value="{{$operatordetails->website}}">
                </div>
              </div>
              <div class="col-sm-4 panel panel-info">
                <div class="panel-heading">
                  <label>CONTACT DETAILS (MAIN)</label>
                </div>
                <div>
                  <label>CONTACT NAME*</label>
                  <input type="text" placeholder="Contact Name" class="form-control" name="c1name" value="{{$operatordetails->contact_name}}">
                </div>
                <div>
                   <label>CONTACT EMAIL</label>
                  <input type="text" placeholder="Contact Email" class="form-control" name="c1email" value="{{$operatordetails->contact_email}}">
                </div>
                <div>
                  <label>CONTACT NO.</label>
                  <input type="number" placeholder="Contact No." class="form-control" name="c1contact" value="{{$operatordetails->contact_no}}">
                </div>
              </div>
                 <?php $i = 0;?>
              @foreach($contdetails as $contact)
                <div class="col-sm-4 panel panel-info">
                <div class="form-head panel-heading">
                  <label>CONTACT DETAILS (2)</label>
                </div>
                <div>
                  <label>CONTACT NAME*</label>
                  <input type="text" placeholder="Contact Name" class="form-control" name="c2name[]" value="{{$contact->name}}">
                </div>
                <div>
                   <label>CONTACT EMAIL</label>
                  <input type="text" placeholder="Contact Email" class="form-control" name="c2email[]" value="{{$contact->email}}">
                </div>
                <div>
                  <label>CONTACT NO.</label>
                  <input type="text" placeholder="Contact No." class="form-control" name="c2contact[]" value="{{$contact->phone}}">
                </div>
              </div>
              
              <?php $i++; ?> 
              @endforeach
              <input type="hidden" name="opr_count" value=" <?php echo $i; ?>">  
            </div>
          </div>

          <div class="row">
  
              
         <div class="col-lg-4 panel panel-info">     
            <div class="form-head panel-heading">
              <label>BANK DETAILS</label>
            </div>
            
              
                <div>
                  <label>BENEFICIARY NAME</label>
                  <input type="text" class="form-control" name="benifitname" value="{{$operatordetails->beneficiary_name}}">
                </div>
                <div>
                  <label>ACCOUNT NO</label>
                  <input type="text" class="form-control" name="accno" value="{{$operatordetails->beneficiary_account_no}}">
                </div>
                  <div>
                  <label>BANK NAME</label>
                  <input type="text" class="form-control" name="bnkname" value="{{$operatordetails->bank_name}}">
                </div>
                  <div>
                  <label>IFSC CODE</label>
                  <input type="text" class="form-control" name="ifsccode" value="{{$operatordetails->ifsc_code}}">
                </div>
                  <div>
                  <label>IS GST APPLICABLE</label>
                        <select name="isgstappy" class="form-control" onchange="yesnoCheck(this);">
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                            
                        </select>
                </div>
             
              <div id="ifYes">
                  <label>GSTIN NO</label>
                  <input type="text" class="form-control" name="gst_id" value="{{$operatordetails->gst_id}}">
                </div>
             
                  <div>
                  <label>PAN #</label>
                  <input type="text" class="form-control" name="panno" value="{{$operatordetails->pan_no}}">
                </div>
              </div>
              
      
          
          <div class="col-sm-4 panel panel-info">
            <div class="panel-heading">
              <label>NIGHT DETAILS</label>
            </div>
           
                <div>
                  <label>START TIME</label>
                  <input type="time" class="form-control" name="timing_start" value="{{$operatordetails->night_start_time}}">
                </div>
                <div>
                  <label>END TIME</label>
                  <input type="time" class="form-control" name="timing_end" value="{{$operatordetails->night_end_time}}">
                </div>
                  <div>
                  <label>TDS RATE</label>
                  <input type="text" class="form-control" name="tdsrate" value="{{$operatordetails->tds_rate}}">
                </div>
              
            </div>
</div>

        </form>
      </div>
      <div class="col-lg-3 col-md-3">
      </div>
    </div>
  </div>
</div>
  @include('agent.layouts.errors')
@endsection

@push('scripts')
  @include('agent.layouts.scripts.select2_scripts')
  <script>
    $(document).ready(function() {
      $(".select2-drop").select2();
    });
  </script>

  @include('agent.layouts.scripts.googleAutoComplete')
<script>
    function yesnoCheck(that) {
        if (that.value == "1") {
            alert("check");
            document.getElementById("ifYes").style.display = "block";
        } else {
            document.getElementById("ifYes").style.display = "none";
        }
    }
</script>
@endpush
