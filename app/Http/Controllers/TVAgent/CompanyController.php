<?php
namespace app\Http\Controllers\TVAgent;
use app\Company;
use app\Http\Requests;
use app\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
  private $pwd;

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
    $companys = $this->getdatafromAPICall('agents/TaxiVaxiclients/list');
    $operatorspackages = $this->getdatafromAPICall('agents/Operator/showpackages');
    $taxitypes = $this->getdatafromAPICall('agents/TaxiVaxiclients_CompanyRate/gettaxitype');
    $cities = $this->getdatafromAPICall('agents/TaxiVaxiclients_CompanyRate/getcity');

    return view('agent.TaxiVaxiClients.index',compact('companys','operatorspackages','taxitypes','cities'));
  }

  public function indexCompanyRate()
  {
    $companys = $this->getdatafromAPICall('agents/TaxiVaxiclients/list');
    $companyrates = $this->getdatafromAPICall('agents/TaxiVaxiclients_CompanyRate/listcomprate');
    $operatorspackages = $this->getdatafromAPICall('agents/Operator/showpackages');
    $taxi_types = $this->getdatafromAPICall('agents/TaxiVaxiclients_CompanyRate/gettaxitype');
    $cities = $this->getdatafromAPICall('agents/TaxiVaxiclients_CompanyRate/getcity');

    return view('agent.TaxiVaxiClients.indexCompanyRate',compact('companyrates','operatorspackages','companys','taxi_types','cities'));
  }

  public function create()
  {
    return view('agent.TaxiVaxiClients.create');
  }

  public function createCompanyRate()
  {
    $companys  = $this->getdatafromAPICall('agents/TaxiVaxiclients/list');
    $taxitypes = $this->getdatafromAPICall('agents/TaxiVaxiclients_CompanyRate/gettaxitype');
    $operatorspackages = $this->getdatafromAPICall('agents/Operator/showpackages');
    $cities = $this->getdatafromAPICall('agents/TaxiVaxiclients_CompanyRate/getcity');

    return view('agent.TaxiVaxiClients.companyrates',compact('companys','taxitypes','operatorspackages','cities'));
  }

  public function settings()
  {
    return view('agent.TaxiVaxiClients.Management_Settings');
  }

  public function show($id) {
    $companys = $this->getdatafromAPICall('agents/TaxiVaxiclients/'.$id.'/showone');

    return view('agent.TaxiVaxiClients.Update',compact('companys'));

  }

  public function showusers($id) {
    $client_users = $this->getdatafromAPICall('agents/TaxiVaxiclients/'.$id.'/showone_user');

    return view('agent.TaxiVaxiClients.clientUserdetails',compact('client_users'));

  }
  public function addnewusers(Request $request, $id) {
    $requestparameter = $request->all();
    $response = $this->postdatafromAPICall($requestparameter, 'agents/TaxiVaxiclients/'.$id.'/addnewusers');
    $client_users = $this->getdatafromAPICall('agents/TaxiVaxiclients/'.$id.'/showone_user');
    if(strcmp($response,"success")){
    return view('agent.TaxiVaxiClients.clientUserdetails',compact('client_users'));
    }else{
    return view('agent.TaxiVaxiClients.clientUserdetails',compact('client_users'));
    }

  }


  public function showCompanyRate($id) {
    $companys = $this->getdatafromAPICall('agents/TaxiVaxiclients/list');
    $cities = $this->getdatafromAPICall('agents/TaxiVaxiclients_CompanyRate/getcity');
    $taxitypes = $this->getdatafromAPICall('agents/TaxiVaxiclients_CompanyRate/gettaxitype');
    $companyrates = $this->getdatafromAPICall('agents/TaxiVaxiclients_CompanyRate/'.$id.'/showCompanyRate');
    return view('agent.TaxiVaxiClients.updateCompanyRate', compact('companyrates','companys','taxitypes','cities'));
  }


  public function submit(Request $request){
    $requestparameter = $request->all();
    $response = $this->postdatafromAPICall($requestparameter, 'agents/TaxiVaxiclients/submit');

    if(strcmp($response,"success")){
      return redirect()->route('Agent.TaxiVaxiclients');
    }else{
      return redirect()->route('Agent.TaxiVaxiclients');
    }

  }

  public function submitCompanyRate(Request $request){

    $requestparameter = $request->all();
    $response = $this->postdatafromAPICall($requestparameter, 'agents/TaxiVaxiclients_CompanyRate/submitCompanyRate');

    if(strcmp($response,"success")){
      return redirect()->route('Agent.TaxiVaxiclients_CompanyRate');
    }else{
      return redirect()->route('Agent.TaxiVaxiclients_CompanyRate');
    }

  }


  public function delete($id) {
    $companys = Company::find($id);
    $companys->delete($id);
    return redirect()->route('Agent.TaxiVaxiclients');
 }

 public function editCompanyRate(Request $request,$id) {

  $requestparameter = $request->all();
  $response = $this->postdatafromAPICall($requestparameter, 'agents/TaxiVaxiclients_CompanyRate/'.$id.'/editCompanyRate');

    if(strcmp($response,"success")){
      return redirect()->route('Agent.TaxiVaxiclients_CompanyRate');
    }else{
        return redirect()->route('Agent.TaxiVaxiclients_CompanyRate');
    }

 }
 public function deleteCompanyRate($id) {
    $response =$this->getdatafromAPICall('agents/TaxiVaxiclients_CompanyRate/'.$id.'/deleteCompanyRate');
    if(strcmp($response,"success")){
      return redirect()->route('Agent.TaxiVaxiclients_CompanyRate');
    }else{
      return redirect()->route('Agent.TaxiVaxiclients_CompanyRate');
    }
 }


    public function edit(Request $request,$id) {

      $requestparameter = $request->all();
      $response = $this->postdatafromAPICall($requestparameter, 'agents/TaxiVaxiclients/'.$id.'/edit');

        if(strcmp($response,"success")){
          return redirect()->route('Agent.TaxiVaxiclients');
        }else{
            return redirect()->route('Agent.TaxiVaxiclients');
        }

     }

     public function showmgmtfee($id) {
      $companys = $this->getdatafromAPICall('agents/TaxiVaxiclients/'.$id.'/showmgmtfee');
      return view('agent.TaxiVaxiClients.Management_Settings',compact('companys'));
      }

     public function editmgmtfee(Request $request,$id) {

      $requestparameter = $request->all();
      $response = $this->postdatafromAPICall($requestparameter, 'agents/TaxiVaxiclients/'.$id.'/editmgmtfee');

        if(strcmp($response,"success")){
          return redirect()->route('Agent.TaxiVaxiclients');
        }else{
            return redirect()->route('Agent.TaxiVaxiclients');
        }

      }



}
