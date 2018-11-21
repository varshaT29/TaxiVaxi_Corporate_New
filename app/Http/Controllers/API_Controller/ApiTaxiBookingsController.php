<?php

namespace app\Http\Controllers\API_Controller;

use app\Company;
use app\Bookings;
use app\Employee_Details;
use app\Company_UserSpoc;
use app\TaxiModels;
use app\Http\Requests;
use app\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class ApiTaxiBookingsController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth:agent-api');
    }

    public function index()
    {
      $bookings = Bookings::whereDate('created_at', Carbon::today())->get();
      return $bookings;
    }

    public function getcompanydetails(){
      $companys = Company::all();
      return $companys;
    }

    public function gettaximodels()
    {
      $taximodels = TaxiModels::all();
      return $taximodels;
    }

    public function active_unassigned()
    {
      $bookings = Bookings::where('status_id','1')->get();
      return $bookings;
    }




    public function getallemployee(){
      $empdets = Employee_Details::all();
      return $empdets;
    }

    public function getallCompanyspoc($id){
      $companyspocs = Company_UserSpoc::where('admin_id',$id)->get();
      return json_encode($companyspocs);
    }



    public function showpassenger($id) {
      $empdets = Employee_Details::where('taxibookingid',$id)->get();
      return $empdets;

    }


    public function showonebooking($id) {
        $bookings = Bookings::find($id);
        return $bookings;
    }

    public function getallCompemployee($id){
      $companyspocs = Employee_Details::where('client_id',$id)->get();
      return json_encode($companyspocs);
    }

    public function submit(Request $request){

        $bookings = new Bookings;

        $bookings->client_id =$request->input('company_id');
        $bookings->tour_type_id =$request->input('tourtype');
        $bookings->no_of_days =$request->input('days');
        $bookings->pickup_city_id =$request->input('city_id');
        $bookings->taxi_type_id =$request->input('taxi_type_id');
        $bookings->package_name=$request->input('package_name');
        $bookings->pickup_location=$request->input('pickup_location');
        $bookings->drop_location = $request->input('drop_location');
        $bookings->pickup_datetime =$request->input('pickupdatetime');
        $bookings->assessment_code =$request->input('assessmentcode');
        $bookings->billing_entity =$request->input('billing_entity');
        $bookings->reason_of_booking =$request->input('reason_for_booking');
        $bookings->is_send_sms =$request->input('send_sms');
        $bookings->is_send_email =$request->input('send_email');
        $bookings->spoc_id =$request->input('spoc_id');

        $employees_id="";
        $i=0;
        $quantities = $request->input('employees');

        foreach($quantities as $quan) {
          $pieces = explode("-", $quan);
          $employees_id .= $pieces[0];
          $i++;
        }
        $bookings->no_of_seats = $i;
        $bookings->passenger_id =$employees_id;

        $bookings->save();
        $eid=$bookings->id;

        if (isset($eid)) {
            return "success";
          } else {
            return "fail";
          }

      }

      public function storedrivertaxi(Request $request,$id){

          Bookings::where('id', $id)-> update(array('operator_id' => $request->input('operator_id')));
          Bookings::where('id', $id)-> update(array('garage_location' => $request->input('garage_location')));
          Bookings::where('id', $id)-> update(array('garage_distance' => $request->input('garage_distance')));
          Bookings::where('id', $id)-> update(array('driver_name' => $request->input('driver_name')));
          Bookings::where('id', $id)-> update(array('driver_contact' => $request->input('driver_contact')));
          Bookings::where('id', $id)-> update(array('taxi_model_id' => $request->input('taxi_model_id')));
          Bookings::where('id', $id)-> update(array('taxi_reg_no' => $request->input('taxi_reg_no')));
          Bookings::where('id', $id)-> update(array('status_id' => '2'));
          return "success";

      }

      public function cancelled(Request $request,$id){
          dd($request);
          Bookings::where('id', $id)-> update(array('cancel_reason' => $request->input('cancel_reason')));
          return "success";

      }

}
