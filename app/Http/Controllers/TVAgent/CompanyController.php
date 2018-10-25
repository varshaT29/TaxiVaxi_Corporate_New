<?php



namespace App\Http\Controllers\Operator;
use App\Company;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CompanyController extends Controller
{
  private $pwd;

  public function index()
  {
    $companys = Company::all();
    return view('operator.TaxiVaxiClients.index',compact('companys'));
  }

  public function create()
  {
    return view('operator.TaxiVaxiClients.create');
  }

  public function settings()
  {
    return view('operator.TaxiVaxiClients.Management_Settings');
  }

  public function show($id) {
    $companys = Company::find($id);
    return view('operator.TaxiVaxiClients.update', compact('companys'));
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
    $company->save();
    return redirect()->route('operator.TaxiVaxiclients');

  }
  /*
    public function mail()
    {
        $name = $request->input('name');
        $sendemail=$request->input('email');
        Mail::to($sendemail)->send(new SendMailable($name));
        return 'Email was sent';
    }*/

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

        return redirect()->route('operator.TaxiVaxiclients');
     }

     public function showmgmtfee($id) {
       $companys = Company::find($id);
       return view('operator.TaxiVaxiClients.Management_Settings', compact('companys'));
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

         return redirect()->route('operator.TaxiVaxiclients');
      }



}
