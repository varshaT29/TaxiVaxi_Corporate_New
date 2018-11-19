<?php

namespace app\Http\Controllers\API_Controller;

use app\Company;
use app\CompanyRates;
use app\TaxiTypes;
use app\Cities;
use app\Operator_Details;
use app\Employee_Details;
use app\Http\Requests;
use app\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiCompanyController extends Controller
{
    //
    private $pwd;
    public function __construct()
    {
      $this->middleware('auth:agent-api');
    }

    public function index()
    {
      $companys = Company::all();
      return $companys;
    }



    public function indexCompanyRate()
    {
      $companyrates = CompanyRates::all();
      return $companyrates;
    }

    public function gettaxitype()
    {
      $taxitype = TaxiTypes::all();
      return $taxitype;
    }
    public function getcity()
    {
      $cities = Cities::all();
      return $cities;
    }

    public function showone($id) {
        $companys = Company::find($id);
        return $companys;
      }

      public function showone_user($id) {
        $clientusers = Employee_Details::where('client_id', $id)->get();
        return $clientusers;
      }

      
      public function addnewusers(Request $request, $id) {
        $userdetails = new Employee_Details;
        $userdetails->employeename =$request->input('employeename');
        $userdetails->employeeid =$request->input('employeeid');
        $userdetails->employeecontact =$request->input('employeecontact');
        $userdetails->employeeemail =$request->input('employeeemail');
        $userdetails->client_id =$id;
        $success = $userdetails->save();
         
         
          if(isset($success)){
              return "success";
          }else {
              return "fail";
          } 
      }

      public function showCompanyRate($id) {
        $companyrates = CompanyRates::find($id);
        return $companyrates;
      }
    
      public function delete($id) {
        $companys = Company::find($id);
        $success = $companys->delete($id);
        if(isset($success)){
          return "success";
          }else {
              return "fail";
          } 
     }
   
     public function deleteCompanyRate($id) {
        $companyrates = CompanyRates::find($id);
        $success = $companyrates->delete($id);
        if(isset($success)){
          return "success";
          }else {
              return "fail";
          } 
     }


     public function submitCompanyRate(Request $request){

      $companyrates = new CompanyRates;
      $companyrates->company_id =$request->input('company_id');
      $companyrates->city_id =$request->input('city_id');
      $companyrates->taxi_type_id =$request->input('taxi_type_id');
      $companyrates->tour_type =$request->input('tour_type');
      $companyrates->package_name =$request->input('package_name');
      $companyrates->base_rate =$request->input('base_rate');
      $companyrates->hours_included =$request->input('hours_included');
      $companyrates->kms_included =$request->input('kms_included');
      $companyrates->per_km_rate =$request->input('per_km_rate');
      $companyrates->per_hour_rate =$request->input('per_hour_rate');
      $companyrates->night_driver_change =$request->input('night_driver_change');
      $success = $companyrates->save();
       
       
        if(isset($success)){
            return "success";
        }else {
            return "fail";
        } 
    }
  
     

      public function submit(Request $request){

        $company = new Company;
        $company->companyname =$request->input('companyname');
        $company->companycode =$request->input('companycode');
        $pwd=$request->input('companypassword');
        $company->companypassword =Hash::make($pwd);
        //$user->password =Hash::make(str_random(8));
        $company->contactperson =$request->input('contactperson');
        $company->contactnumber =$request->input('contactnumber');
        $company->contactemail =$request->input('contactemail');
        $company->spoc_approval =$request->input('spoc_approval');
        $company->admin_approval =$request->input('admin_approval');
        $company->hasapproverlevel =$request->input('hasapproverlevel');
        $company->hasbothapprover =$request->input('hasbothapprover');
        // $company->hasnoapprover =$request->input('hasnoapprover');
        $company->bus_booking =$request->input('bus_booking');
        $company->local_booking =$request->input('local_booking');
        $company->outstation_booking =$request->input('outstation_booking');
        $company->radio_booking =$request->input('radio_booking');
        $company->train_booking =$request->input('train_booking');
        $company->hotel_booking =$request->input('hotel_booking');
        $company->flight_booking =$request->input('flight_booking');
        $company->companybillingname =$request->input('companybillingname');
        $company->companybillingaddress =$request->input('companybillingaddress');
        $company->companygst =$request->input('companygst');
        
        $success = $company->save();
       
       
        if(isset($success)){
            return "success";
        }else {
            return "fail";
        } 
    
      }
      
      public function edit(Request $request,$id) {

        $companyname =$request->input('companyname');
        $companycode =$request->input('companycode');
        $contactperson =$request->input('contactperson');
        $contactnumber =$request->input('contactnumber');
        $contactemail =$request->input('contactemail');
        $companypassword =$request->input('companypassword');
        $companybillingname =$request->input('companybillingname');
        $companybillingaddress =$request->input('companybillingaddress');
        $companygst =$request->input('companygst');
        // $companyapprovaltype =implode(',',$request->input('companyapprovaltype'));
        // $companybookingtype =implode(',',$request->input('companybookingtype'));
        $spoc_approval =$request->input('spoc_approval');
        $admin_approval =$request->input('admin_approval');
        $hasapproverlevel =$request->input('hasapproverlevel');
        $hasbothapprover =$request->input('hasbothapprover');
        // $hasnoapprover =$request->input('hasnoapprover');
        $bus_booking =$request->input('bus_booking');
        $local_booking =$request->input('local_booking');
        $outstation_booking =$request->input('outstation_booking');
        $radio_booking =$request->input('radio_booking');
        $train_booking =$request->input('train_booking');
        $hotel_booking =$request->input('hotel_booking');
        $flight_booking =$request->input('flight_booking');
 
         Company::where('id', $id)-> update(array('companyname' => $companyname));
         Company::where('id', $id)-> update(array('companycode' => $companycode));
         Company::where('id', $id)-> update(array('contactperson' => $contactperson));
         Company::where('id', $id)-> update(array('contactnumber' => $contactnumber));
         Company::where('id', $id)-> update(array('contactemail' => $contactemail));
         Company::where('id', $id)-> update(array('companypassword' => $companypassword));
         Company::where('id', $id)-> update(array('companybillingname' => $companybillingname));
         Company::where('id', $id)-> update(array('companybillingaddress' => $companybillingaddress));
         Company::where('id', $id)-> update(array('companygst' => $companygst));
         // Company::where('id', $id)-> update(array('companyapprovaltype' => $companyapprovaltype));
         // Company::where('id', $id)-> update(array('companybookingtype' => $companybookingtype));
         Company::where('id', $id)-> update(array('spoc_approval' => $spoc_approval));
         Company::where('id', $id)-> update(array('admin_approval' => $admin_approval));
         Company::where('id', $id)-> update(array('hasapproverlevel' => $hasapproverlevel));
         Company::where('id', $id)-> update(array('hasbothapprover' => $hasbothapprover));
         // Company::where('id', $id)-> update(array('hasnoapprover' => $hasnoapprover));
         Company::where('id', $id)-> update(array('radio_booking' => $radio_booking));
         Company::where('id', $id)-> update(array('local_booking' => $local_booking));
         Company::where('id', $id)-> update(array('outstation_booking' => $outstation_booking));
         Company::where('id', $id)-> update(array('bus_booking' => $bus_booking));
         Company::where('id', $id)-> update(array('train_booking' => $train_booking));
         Company::where('id', $id)-> update(array('flight_booking' => $flight_booking));
         Company::where('id', $id)-> update(array('hotel_booking' => $hotel_booking));
 
         return "success";
      }

      public function editCompanyRate(Request $request,$id) {

        $company_id =$request->input('company_id');
        $city_id =$request->input('city_id');
        $taxi_type_id =$request->input('taxi_type_id');
        $tour_type =$request->input('tour_type');
        $package_name =$request->input('package_name');
        $base_rate =$request->input('base_rate');
        $hours_included =$request->input('hours_included');
        $kms_included =$request->input('kms_included');
        $per_km_rate =$request->input('per_km_rate');
        $per_hour_rate =$request->input('per_hour_rate');
        $night_driver_change =$request->input('night_driver_change');

         CompanyRates::where('id', $id)-> update(array('company_id' => $company_id));
         CompanyRates::where('id', $id)-> update(array('city_id' => $city_id));
         CompanyRates::where('id', $id)-> update(array('taxi_type_id' => $taxi_type_id));
         CompanyRates::where('id', $id)-> update(array('tour_type' => $tour_type));
         CompanyRates::where('id', $id)-> update(array('package_name' => $package_name));
         CompanyRates::where('id', $id)-> update(array('base_rate' => $base_rate));
         CompanyRates::where('id', $id)-> update(array('hours_included' => $hours_included));
         CompanyRates::where('id', $id)-> update(array('kms_included' => $kms_included));
         CompanyRates::where('id', $id)-> update(array('per_km_rate' => $per_km_rate));
         CompanyRates::where('id', $id)-> update(array('per_hour_rate' => $per_hour_rate));
         CompanyRates::where('id', $id)-> update(array('night_driver_change' => $night_driver_change));

         return "success";
      }



      public function showmgmtfee($id) {
        $companys = Company::find($id);
        return  $companys;
      }

      public function editmgmtfee(Request $request,$id) {

        $radio_booking_mgmt_fee =$request->input('radio_booking_mgmt_fee');
        $local_booking_mgmt_fee =$request->input('local_booking_mgmt_fee');
        $outstation_booking_mgmt_fee =$request->input('outstation_booking_mgmt_fee');
        $bus_booking_mgmt_fee =$request->input('bus_booking_mgmt_fee');
        $train_booking_mgmt_fee =$request->input('train_booking_mgmt_fee');
        $flight_booking_mgmt_fee =$request->input('flight_booking_mgmt_fee');
        $hotel_booking_mgmt_fee =$request->input('hotel_booking_mgmt_fee');

         Company::where('id', $id)-> update(array('radio_booking_mgmt_fee' => $radio_booking_mgmt_fee));
         Company::where('id', $id)-> update(array('local_booking_mgmt_fee' => $local_booking_mgmt_fee));
         Company::where('id', $id)-> update(array('outstation_booking_mgmt_fee' => $outstation_booking_mgmt_fee));
         Company::where('id', $id)-> update(array('bus_booking_mgmt_fee' => $bus_booking_mgmt_fee));
         Company::where('id', $id)-> update(array('train_booking_mgmt_fee' => $train_booking_mgmt_fee));
         Company::where('id', $id)-> update(array('flight_booking_mgmt_fee' => $flight_booking_mgmt_fee));
         Company::where('id', $id)-> update(array('hotel_booking_mgmt_fee' => $hotel_booking_mgmt_fee));

         return "success";
      } 

}
