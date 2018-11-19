<?php
namespace app\Http\Controllers\TVAgent;
use app\Taxivaxi_Admins;
use app\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AgentController extends Controller
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
    $users = $this->getdatafromAPICall('agents/TaxiVaxiAgents/list');
      return view('agent.Agents.index',compact('users'));

  }

  public function create()
  {
    return view('agent.Agents.create');
  }

  public function show($id) {
    $users = $this->getdatafromAPICall('agents/TaxiVaxiAgents/'.$id.'/showone');
      return view('agent.Agents.Update',compact('users'));

  }

  public function submit(Request $request){
    $requestparameter = $request->all(); 
    $response = $this->postdatafromAPICall($requestparameter, 'agents/TaxiVaxiAgents/submit');

    if(strcmp($response,"success")){
      return redirect()->route('Agent.agents');
    }else{
        return redirect()->route('Agent.agents');
    }

  }


    public function edit(Request $request,$id) {

      $requestparameter = $request->all(); 
      $response = $this->postdatafromAPICall($requestparameter, 'agents/TaxiVaxiAgents/'.$id.'/edit');
    
        if(strcmp($response,"success")){
          return redirect()->route('Agent.agents');
        }else{
            return redirect()->route('Agent.agents');
        }
    
       
     }

}
