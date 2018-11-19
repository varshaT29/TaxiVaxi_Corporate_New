<?php

namespace app\Http\Controllers\TVAgent;
use app\Operator_Details;
use app\Http\Controllers\Controller;
use app\OperatorContactsDetails;
use Illuminate\Http\Request;
use GuzzleHttp\Psr7\Request as GuzzleRequest;
use Illuminate\Support\Facades\Route;
use app\Cities;
use app\TaxiTypes;
use app\OperatorRates;



use GuzzleHttp\Client;

class OperatorsController extends Controller
{
    //
    
    public function __construct()
  {
    $this->middleware('auth:agent');
  }

  public function getdatafromAPICall($urlcall){

    $user = \Auth::user();

    try {
      $client = new \GuzzleHttp\Client();
     $response = $client->get('localhost/Taxivaxi_corporate_new/public/api/'.$urlcall,
          ['headers' => ['Authorization' => 'Bearer '.$user->api_token]]);
          
          $response_msg = json_decode($response->getBody()); 
          return $response_msg;
           
      } catch (\ConnectException $e) {
          Log::error($e);
          return error($e);
      }



  }

  public function postdatafromAPICall($request,$urlcall){

    $user = \Auth::user();
    $client = new \GuzzleHttp\Client();

    
    
       $response = $client->request('POST', 'localhost/Taxivaxi_corporate_new/public/api/'.$urlcall, [
           'form_params' => $request,
           'headers' => [
               'Authorization' => 'Bearer '.$user->api_token
           ]
       ]);
      
       return $response->getBody();


  }




public function index()
  {
      $operators = $this->getdatafromAPICall('agents/Operator/list');
      return view('agent.Operators.index',compact('operators'));
    
  }
  
  public function delete($id) {
    $response = $this->getdatafromAPICall('agents/Operator/'.$id.'/delete');
    if(strcmp($response,"success")){
        return redirect()->route('Operator.operator');
    }else{
        return redirect()->route('Operator.operator');
    }
    
 }
public function create()
  {
    return view('agent.Operators.create');
  }

  public function show($id) {
      $operatordetails = $this->getdatafromAPICall('agents/Operator/'.$id.'/showone');
      $contdetails = $this->getdatafromAPICall('agents/Operator/'.$id.'/showOprContact');
      return view('agent.Operators.update', compact('operatordetails','contdetails'));
  }  
  

  public function submit(Request $request){
    $requestparameter = $request->all(); 
    $response = $this->postdatafromAPICall($requestparameter, 'agents/Operator/submit');

    if(strcmp($response,"success")){
      return redirect()->route('Operator.operator');
    }else{
        return redirect()->route('Operator.operator');
    }

  }

  
  public function submitCompanyRate(Request $request){

    $requestparameter = $request->all(); 
    $response = $this->postdatafromAPICall($requestparameter, 'agents/Operator/submit');

    if(strcmp($response,"success")){
      return redirect()->route('Agent.TaxiVaxiclients_CompanyRate');
    }else{
        return redirect()->route('Agent.TaxiVaxiclients_CompanyRate');
    }
    
  }


 public function edit(Request $request,  $id) {

  $requestparameter = $request->all(); 
  $response = $this->postdatafromAPICall($requestparameter, 'agents/Operator/'.$id.'/edit');

    if(strcmp($response,"success")){
      return redirect()->route('Operator.operator');
    }else{
        return redirect()->route('Operator.operator');
    }

   

  }

  
  public function operator_rateform()
  {
    
    $operators = $this->getdatafromAPICall('agents/Operator/list');
    $cities = $this->getdatafromAPICall('agents/TaxiVaxiclients_CompanyRate/getcity');
    $taxi_types = $this->getdatafromAPICall('agents/TaxiVaxiclients_CompanyRate/gettaxitype');
    $operatorspackages = $this->getdatafromAPICall('agents/Operator/showpackages');

    return view('agent.Operators.createRateform',compact('operators','cities','taxi_types','operatorspackages'));
    
  }

  


public function operator_show_rateform()
  {
    $cities = $this->getdatafromAPICall('agents/TaxiVaxiclients_CompanyRate/getcity');
    $operators = $this->getdatafromAPICall('agents/Operator/list');
    $operatorsrates = $this->getdatafromAPICall('agents/Operator/rateformlist');
    $taxi_types = $this->getdatafromAPICall('agents/TaxiVaxiclients_CompanyRate/gettaxitype');

    return view('agent.Operators.displayRateform',compact('operatorsrates','cities','operators','taxi_types'));
    
  }

public function operator_edit_rateform($id){
  $operatorsrates = $this->getdatafromAPICall('agents/Operator/'.$id.'/rateedit');
  $cities = $this->getdatafromAPICall('agents/TaxiVaxiclients_CompanyRate/getcity');
  $taxi_types = $this->getdatafromAPICall('agents/TaxiVaxiclients_CompanyRate/gettaxitype');
  $operatorspackages = $this->getdatafromAPICall('agents/Operator/showpackages');
  $operators = $this->getdatafromAPICall('agents/Operator/list');

    return view('agent.Operators.updateRateform',compact('operatorsrates','cities','taxi_types','operatorspackages','operators'));
}  

public function operator_store_rateform(Request $request)
{
  $requestparameter = $request->all(); 
  $response = $this->postdatafromAPICall($requestparameter, 'agents/Operator/rateform_submit');

    if(strcmp($response,"success")){
      $operatorsrates = $this->getdatafromAPICall('agents/Operator/rateformlist');
      return redirect()->route('Operator.show-rateform',compact('operatorsrates'));
    }else{
        return redirect()->route('Operator.show-rateform',compact('operatorsrates'));
    }

}


public function operator_editsave_rateform(Request $request, $id){


  $requestparameter = $request->all(); 
  $response = $this->postdatafromAPICall($requestparameter, 'agents/Operator/'.$id.'/rateeditsave');

    if(strcmp($response,"success")){
      return redirect()->route('Operator.show-rateform',compact('operatorsrates'));
    }else{
        return redirect()->route('Operator.show-rateform',compact('operatorsrates'));
    }

} 

public function operator_delete_rateform($id) {
  $response = $this->getdatafromAPICall('agents/Operator/'.$id.'/ratedelete');
  if(strcmp($response,"success")){
      return redirect()->route('Operator.show-rateform');
  }else{
      return redirect()->route('Operator.show-rateform');
  }
  
}


  }  
  

