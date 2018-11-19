@extends('agent.layouts.master')



@push('styles')
  @include('agent.layouts.styles.select2_styles')
@endpush



@section('content')

  @include('agent.layouts.nav')
  
  <div class="container">
    <div class="row">
      <div class="col-xs-6 client-create-wrap">
        <form id="addAgentForm" method="post" action="{{ route('Operator.editsave-rateform', ['id' => $operatorsrates->id]) }}">
          {{ csrf_field() }}

          <div class = "panel panel-info">
            <div class = "panel-heading">
                <h3 class = "panel-title">ADD Operator Rates</h3>
                
            </div>
            
            <div class = "panel-body">
            <input type="submit" value="submit" class="custom-submit-btn btn btn-default" name="">
            <div>
                  <label>OPERATOR NAME*</label>
                     <select name="operator_id" class="form-control">
                         @foreach ($operators as $operator)
                              <option value="{{ $operator->id  }}" {{ $operatorsrates->operator_id == $operator->id ? 'selected' : ''}}>{{ $operator->operator_name }} ({{ $operator->contact_no }})</option>
                         @endforeach

                  </select>
            </div>

            <div>
                  <label>SELECT CITY*</label>
                  <?php $selectedcitys=$operatorsrates->city_id  ?>
                     <select name="city_id" class="form-control">
                         @foreach ($cities as $citie)
                              <option value="{{ $citie->id  }}"{{$selectedcitys == $citie->id ? 'selected="selected"' : ''}}>{{ $citie->name }}</option>
                         @endforeach

                  </select>
            </div>

            <div>
                  <label>SELECT TAXI TYPE</label>
                     <select name="taxi_type_id" class="form-control">
                         @foreach ($taxi_types as $taxi_type)
                              <option value="{{ $taxi_type->id  }}" {{ $operatorsrates->taxi_type_id == $taxi_type->id ? 'selected' : ''}}>{{ $taxi_type->name }}</option>
                         @endforeach

                  </select>
            </div>

            <div>
                <label>PACKAGE</label>
                       <select name="package_name" id="package_name" class="form-control">
                       @foreach ($operatorspackages as $operatorspackage)
                              <option value="{{ $operatorspackage->package_name  }}" {{ $operatorsrates->package_name == $operatorspackage->package_name ? 'selected' : ''}}>{{ $operatorspackage->package_name }} </option>
                         @endforeach

                 </select>
            </div>

            <div>
                  <label>TOUR TYPE</label>
                     <select name="tour_type" class="form-control">
                       
                              <option value="1" {{ '1' == $operatorsrates->tour_type ? 'selected' : ''}}>Local</option>
                              <option value="2" {{ '2' == $operatorsrates->tour_type ? 'selected' : ''}}>Outstation</option>
                        
                  </select>
            </div>

            <div>
                  <label>BASE RATE</label>
                  <input type="number" placeholder="BASE RATE" class="form-control" name="base_rate" value="{{$operatorsrates->base_rate}}">
            </div>

            <div>
                  <label>Hours Included</label>
                  <input type="number" placeholder="Hours Included" class="form-control" name="hour_rate" value="{{$operatorsrates->hour_rate}}">
            </div>

            <div>
                  <label>Kms Included</label>
                  <input type="number" placeholder="Kms Included" class="form-control" name="kms" value="{{$operatorsrates->kms}}">
            </div>
            <div>
                  <label>Per Hour Rate</label>
                  <input type="number" placeholder="Per Hour Rate" class="form-control" name="hours" value="{{$operatorsrates->hours}}">
            </div>
            <div>
                  <label>Per Km Rate</label>
                  <input type="number" placeholder="Per Km Rate" class="form-control" name="km_rate" value="{{$operatorsrates->km_rate}}">
            </div>
            <div>
                  <label>Night/Driver Charge</label>
                  <input type="number" placeholder="Night/Driver Charge" class="form-control" name="night_rate" value="{{$operatorsrates->night_rate}}">  
            </div>
            <div>
                  <label>Fuel Charge</label>
                  <input type="number" placeholder="Fuel Charge" class="form-control" name="fuel_rate" value="{{$operatorsrates->fuel_rate}}">
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

</script>
@endpush
