<?php



namespace app\Http\Controllers\TVAgent;
use app\Company;
use app\Bookings;
use app\Employee_Details;
use app\Http\Requests;
use app\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class TaxiBookingsController extends Controller
{

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
    $bookings = $this->getdatafromAPICall('agents/TaxiBookings/list');
    return view('agent.TaxiBookings.index',compact('bookings'));
  }

  public function active_unassigned()
  {
    $bookings = $this->getdatafromAPICall('agents/TaxiBookings/listunassigned');
    $companys = $this->getdatafromAPICall('agents/TaxiBookings/getcompany');
    $cities = $this->getdatafromAPICall('agents/TaxiVaxiclients_CompanyRate/getcity');
    return view('agent.TaxiBookings.TaxiBooking-active-unassigned',compact('bookings','companys','cities'));
  }


  public function create()
  {
    $companys = $this->getdatafromAPICall('agents/TaxiBookings/getcompany');
    $empdetails = $this->getdatafromAPICall('agents/TaxiBookings/employeelist');
    $cities = $this->getdatafromAPICall('agents/TaxiVaxiclients_CompanyRate/getcity');
    $taxi_types = $this->getdatafromAPICall('agents/TaxiVaxiclients_CompanyRate/gettaxitype');
    $operatorspackages = $this->getdatafromAPICall('agents/Operator/showpackages');

    return view('agent.TaxiBookings.create',compact('companys','empdetails','cities','taxi_types','operatorspackages'));

  }

  public function showpassenger($id) {
    $empdets =  $this->getdatafromAPICall('agents/TaxiBookings/'.$id.'/showone');
    //$empdets = Employee_Details::where('taxibookingid',$id)->get();
    return view('agent.TaxiBookings.PassengerDetails', compact('empdets'));

  }


  public function submit(Request $request){

    $requestparameter = $request->all();
    $response = $this->postdatafromAPICall($requestparameter, 'agents/TaxiBookings/submit');

    if(strcmp($response,"success")){
      return redirect()->route('Agent.TaxiBookings');
    }else{
        return redirect()->route('Agent.TaxiBookings');
    }


  }



}
