<?php

namespace app\Http\Controllers\TVAgent;
use app\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Taxivaxi_Admins;
use Auth;

class AgentHomeController extends Controller
{
    //


    public function __construct()
  {
    $this->middleware('auth:agent');
  }

  public function dashboard()
  {

    return view('agent.dashboard');
  }

  public function logout()
  {

    if(Auth::guard('agent')->check())
    {
      Auth::guard('agent')->logout();
      return redirect()->route('agent.login');
    }
    else
    {
      dd('not logged in so cannot log out');
    }
  }

}
