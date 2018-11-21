<?php

namespace app\Http\Controllers\API_Controller;

use app\Company;
use app\Bookings;
use app\Employee_Details;
use app\Company_UserSpoc;
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

    
    public function getallemployee()
    {
      $empdets = Employee_Details::all();
      return $empdets;
    }

    public function getallCompanyspoc($id){
      $companyspocs = Company_UserSpoc::where('admin_id',$id)->get();
      return json_encode($companyspocs);
    }

    
 
    public function showpassenger($id) {
      $empdets = Employee_Details::find($id);
      return json_encode($empdets);
  
    }


    public function getallCompemployee($id){
      $companyspocs = Employee_Details::where('client_id',$id)->get();
      return json_encode($companyspocs);
    }
    

    public function getOneCompemployee($id){
     
      $empdets=array();
      $empids = explode(',',$id);
      
      for ($i = 0; $i < (sizeof($empids)-1); $i++) {
        $empdets[] = Employee_Details::find($empids[$i]);
      }
      
      
      return json_encode($empdets);

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
          $employees_id .=$pieces[0].',';
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
      public function save_edittaxibooking(Request $request, $id){

        $bookings = new Bookings;

        Bookings::where('id', $id)-> update(array('client_id' => $request->input('company_id')));
        Bookings::where('id', $id)-> update(array('tour_type_id' => $request->input('tourtype')));
        Bookings::where('id', $id)-> update(array('no_of_days' => $request->input('days')));
        Bookings::where('id', $id)-> update(array('pickup_city_id' => $request->input('city_id')));
        Bookings::where('id', $id)-> update(array('taxi_type_id' => $request->input('taxi_type_id')));
        Bookings::where('id', $id)-> update(array('package_name' => $request->input('package_name')));
        Bookings::where('id', $id)-> update(array('pickup_location' => $request->input('pickup_location')));
        Bookings::where('id', $id)-> update(array('drop_location' => $request->input('drop_location')));
        Bookings::where('id', $id)-> update(array('pickup_datetime' => $request->input('pickupdatetime')));
        Bookings::where('id', $id)-> update(array('assessment_code' => $request->input('assessmentcode')));
        Bookings::where('id', $id)-> update(array('billing_entity' => $request->input('billing_entity')));
        Bookings::where('id', $id)-> update(array('reason_of_booking' => $request->input('reason_for_booking')));
        Bookings::where('id', $id)-> update(array('is_send_sms' => $request->input('send_sms')));
        Bookings::where('id', $id)-> update(array('is_send_email' => $request->input('send_email')));
        Bookings::where('id', $id)-> update(array('spoc_id' => $request->input('spoc_id')));
       


        $employees_id="";
        $i=0;
        $quantities = $request->input('employees');

        foreach($quantities as $quan) {
          $pieces = explode("-", $quan);
          $employees_id .=$pieces[0].',';
          $i++;
        }
        Bookings::where('id', $id)-> update(array('no_of_seats' => $i));
        Bookings::where('id', $id)-> update(array('passenger_id' => $employees_id));
       

       return "success";
         
    
      }

      

public function getOneBookings($id)
  {
    $onebookings = Bookings::find($id);
    return $onebookings;
  }

public function active_unassigned()
   {
     $bookings = Bookings::all();
     return $bookings;
   }



}
