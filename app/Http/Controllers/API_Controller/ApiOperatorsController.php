<?php

namespace app\Http\Controllers\API_Controller;
use app\Operator_Details;
use app\Http\Controllers\Controller;
use app\OperatorContactsDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Cities;
use app\TaxiTypes;
use app\OperatorRates;

class ApiOperatorsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:agent-api');
    }


    public function index()
    {
        $operators = Operator_Details::all();
        return $operators;
    }

    public function showone($id)
    {
        $operatorsone = Operator_Details::find($id);
        return $operatorsone;
    }

    public function showOprContact($id)
    {
        $operatorscontact = OperatorContactsDetails::where('operator_id', $id)->get();
        return $operatorscontact;
    }

    public function submit(Request $request){

        $operator = new Operator_Details;
        $operator->operator_name =$request->input('companyname');
        $operator->operator_email =$request->input('email');
        $operator->operator_contact=$request->input('contact');
        $operator->operator_address =$request->input('address');
        $operator->website =$request->input('website');
        $operator->contact_name =$request->input('c1name');
        $operator->contact_email =$request->input('c1email');
        $operator->contact_no =$request->input('c1contact');
        $operator->beneficiary_name =$request->input('benifitname');
        $operator->beneficiary_account_no =$request->input('accno');
        $operator->bank_name =$request->input('bnkname');
        $operator->ifsc_code=$request->input('ifsccode');
        $operator->is_service_tax_applicable=$request->input('isgstappy');
        $operator->service_tax_number=$request->input('service_tax_number');
        $operator->pan_no=$request->input('panno');
        $operator->night_start_time=$request->input('timing_start');
        $operator->night_end_time=$request->input('timing_end');
        $operator->tds_rate=$request->input('tdsrate');
        $operator->gst_id=$request->input('gst_id');
        
        $operator->save();
        $eid=$operator->id;
        
        $contacts = new OperatorContactsDetails;
        if(!empty($request->input('c2name'))) {
            $contacts->operator_id=$eid;
            $contacts->name=$request->input('c2name');
            $contacts->email=$request->input('c2email');
            $contacts->phone=$request->input('c2contact');
           $contacts->save();
        } 
        if(!empty($request->input('c3name'))) {
            $contacts->operator_id=$eid;
            $contacts->name=$request->input('c3name');       
            $contacts->email=$request->input('c3email');
            $contacts->phone=$request->input('c3contact');
            $contacts->save();
        } 
        
        if (isset($eid)) {
            return "success";
          } else {
            return "fail";
          }
       
      }

public function edit(Request $request,  $id) {

    $operator= Operator_Details::find($id);
    $operator->operator_name =$request->input('companyname');
    $operator->operator_email =$request->input('email');
    $operator->operator_contact=$request->input('contact');
    $operator->operator_address =$request->input('address');
    $operator->website =$request->input('website');
    $operator->contact_name =$request->input('c1name');
    $operator->contact_email =$request->input('c1email');
    $operator->contact_no =$request->input('c1contact');
    $operator->beneficiary_name =$request->input('benifitname');
    $operator->beneficiary_account_no =$request->input('accno');
    $operator->bank_name =$request->input('bnkname');
    $operator->ifsc_code=$request->input('ifsccode');
    $operator->is_service_tax_applicable=$request->input('isgstappy');
    $operator->service_tax_number=$request->input('service_tax_number');
    $operator->pan_no=$request->input('panno');
    $operator->night_start_time=$request->input('timing_start');
    $operator->night_end_time=$request->input('timing_end');
    $operator->tds_rate=$request->input('tdsrate');
    $operator->gst_id=$request->input('gst_id');


    $no_of_contact = $request->input('opr_count');

        for($i=0;$i<$no_of_contact;$i++)
        {
        OperatorContactsDetails::where('operator_id', $id)-> update(array('name' => $request->c2name [$i]));
        OperatorContactsDetails::where('operator_id', $id)-> update(array('email' => $request->c2email [$i]));
        OperatorContactsDetails::where('operator_id', $id)-> update(array('phone' => $request->c2contact [$i]));

        }

    $success = $operator->save();
    if(isset($success)){
        return "success";
    }else {
        return "fail";
      } 
    

}
  
public function delete($id) {
    $operators = Operator_Details::find($id);
    $contdetails = OperatorContactsDetails::where('operator_id',$id)->get()->each->delete();
    $success = $operators->delete($id);    
    if(isset($success)){
        return json_encode("success");
    }else {
        return json_encode("fail");
      } 
 }


 public function operator_show_all()
 {
   $operatorsrates = OperatorRates::all();
   return $operatorsrates;
 }

 public function operator_edit_rateform($id)
 {
   $operatorsrates = OperatorRates::find($id);
   return $operatorsrates;
 }

 public function operator_show_packages()
 {
   $operatorspackages = OperatorRates::select('package_name')->distinct()->get();
   return $operatorspackages;
 }

 public function operator_show_city($id)
 {
   $operatorcities = OperatorRates::select('city_id')->where('operator_id','=',$id)->distinct()->get();
   return json_encode($operatorcities);
 }
 
 public function operator_show_taxitype($id)
 {
   $operatortaxitype = OperatorRates::select('taxi_type_id')->where('operator_id','=',$id)->distinct()->get();
   return json_encode($operatortaxitype);
 }
 public function operator_store_rateform(Request $request)
 {
   $operator_rate = new OperatorRates;
   $operator_rate->package_name =$request->input('package_name');
   $operator_rate->city_id =$request->input('city_id');
   $operator_rate->taxi_type_id=$request->input('taxi_type_id');
   $operator_rate->tour_type =$request->input('tour_type');
   $operator_rate->kms =$request->input('kms');
   $operator_rate->hour_rate =$request->input('hour_rate');
   $operator_rate->km_rate =$request->input('km_rate');
   $operator_rate->hours =$request->input('hours');
   $operator_rate->base_rate =$request->input('base_rate');
   $operator_rate->night_rate =$request->input('night_rate');
   $operator_rate->fuel_rate =$request->input('fuel_rate');
   $operator_rate->operator_id=$request->input('operator_id');
   
   $success = $operator_rate->save();
       
    if(isset($success)){
        return "success";
    }else {
        return "fail";
      } 
}


public function operator_editsave_rateform(Request $request, $id){
    $operator_rate = OperatorRates::find($id);
    
    $operator_rate->package_name =$request->input('package_name');
    $operator_rate->city_id =$request->input('city_id');
    $operator_rate->taxi_type_id=$request->input('taxi_type_id');
    $operator_rate->tour_type =$request->input('tour_type');
    $operator_rate->kms =$request->input('kms');
    $operator_rate->hour_rate =$request->input('hour_rate');
    $operator_rate->km_rate =$request->input('km_rate');
    $operator_rate->hours =$request->input('hours');
    $operator_rate->base_rate =$request->input('base_rate');
    $operator_rate->night_rate =$request->input('night_rate');
    $operator_rate->fuel_rate =$request->input('fuel_rate');
    $operator_rate->operator_id=$request->input('operator_id');
    
    $success = $operator_rate->save();
        
    if(isset($success)){
        return "success";
    }else {
        return "fail";
    } 

}

 
public function operator_delete_rateform($id) {
    $operatorsrate = OperatorRates::find($id);
    $success = $operatorsrate->delete($id);    
    if(isset($success)){
        return json_encode("success");
    }else {
        return json_encode("fail");
      } 
 }

  
  }  
  

