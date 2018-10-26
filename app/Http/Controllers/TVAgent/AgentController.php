<?php



namespace app\Http\Controllers\TVAgent;
use app\Taxivaxi_Admins;
use app\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AgentController extends Controller
{
  private $pwd;

  public function index()
  {
    $users = Taxivaxi_Admins::all();
    return view('agent.Agents.index',compact('users'));
  }

  public function create()
  {
    return view('agent.Agents.create');
  }

  public function show($id) {
     $users = Taxivaxi_Admins::find($id);
     return view('agent.Agents.Update', compact('users'));
  }

  public function submit(Request $request){
    $user = new Taxivaxi_Admins;
    $user->name =$request->input('name');
    $user->emp_id =$request->input('emp_id');
    $user->email =$request->input('email');
    $pwd=str_random(8);
    $user->password =Hash::make($pwd);
    $user->mobile =$request->input('mobile');
    $user->company =$request->input('company');
    $user->superadmin =$request->input('superadmin');
    $user->has_taxi_booking_access =$request->input('has_taxi_booking_access');
    $user->has_bus_booking_access =$request->input('has_bus_booking_access');
    $user->has_train_booking_access =$request->input('has_train_booking_access');
    $user->has_flight_booking_access =$request->input('has_flight_booking_access');
    $user->has_meal_booking_access =$request->input('has_meal_booking_access');
    $user->has_billing_access =$request->input('has_billing_access');
    // $user->access =implode(',',$request->input('access'));
    $user->shift_timing_start =$request->input('shift_timing_start');
    $user->shift_timing_end =$request->input('shift_timing_end');
    $user->save();

    //$name = $request->input('name');
    //$sendemail=$request->input('email');
    //Mail::to('$user->email')->send(new SendMailable('$user->name'));
    //$name1=$user->name;
    //$email1=$user->email;
    //$title="Temporary Password";
    //$message="Your temporary password is: " + $user->password;
    //Mail::send('emails.send', ['title' => $title, 'message' => $message], function ($message) {
      //   $message->from('varsharani@taxivaxi.com');
        // $message->to('$user->email');});
     return redirect()->route('Agent.agents');

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

       $name =$request->input('name');
       $email =$request->input('email');
       $mobile =$request->input('mobile');
       $company =$request->input('company');
       $superadmin =$request->input('superadmin');
       $emp_id =$request->input('emp_id');
       $has_taxi_booking_access =$request->input('has_taxi_booking_access');
       $has_bus_booking_access =$request->input('has_bus_booking_access');
       $has_train_booking_access =$request->input('has_train_booking_access');
       $has_meal_booking_access =$request->input('has_meal_booking_access');
       $has_flight_booking_access =$request->input('has_flight_booking_access');
       $has_billing_access =$request->input('has_billing_access');
       // $access =implode(',',$request->input('access'));
       $shift_timing_start =$request->input('shift_timing_start');
       $shift_timing_end =$request->input('shift_timing_end');
        Taxivaxi_Admins::where('id', $id)-> update(array('name' => $name));
        Taxivaxi_Admins::where('id', $id)-> update(array('email' => $email));
        Taxivaxi_Admins::where('id', $id)-> update(array('mobile' => $mobile));
        Taxivaxi_Admins::where('id', $id)-> update(array('company' => $company));
        Taxivaxi_Admins::where('id', $id)-> update(array('superadmin' => $superadmin));
        Taxivaxi_Admins::where('id', $id)-> update(array('emp_id' => $emp_id));
        Taxivaxi_Admins::where('id', $id)-> update(array('has_taxi_booking_access' => $has_taxi_booking_access));
        Taxivaxi_Admins::where('id', $id)-> update(array('has_bus_booking_access' => $has_bus_booking_access));
        Taxivaxi_Admins::where('id', $id)-> update(array('has_meal_booking_access' => $has_meal_booking_access));
        Taxivaxi_Admins::where('id', $id)-> update(array('has_train_booking_access' => $has_train_booking_access));
        Taxivaxi_Admins::where('id', $id)-> update(array('has_flight_booking_access' => $has_flight_booking_access));
        Taxivaxi_Admins::where('id', $id)-> update(array('has_billing_access' => $has_billing_access));
        // User::where('id', $id)-> update(array('access' => $access));
        Taxivaxi_Admins::where('id', $id)-> update(array('shift_timing_start' => $shift_timing_start));
        Taxivaxi_Admins::where('id', $id)-> update(array('shift_timing_end' => $shift_timing_end));
        return redirect()->route('Agent.agents');
     }

}
