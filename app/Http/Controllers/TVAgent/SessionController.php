<?php

namespace app\Http\Controllers\TVAgent;

use Illuminate\Http\Request;
use Auth;
use app\UserAgents;
use app\PasswordReset;

class SessionController extends Controller
{
    //
    public function __construct()
  {
    $this->middleware('guest:agent')->except(['destroy']);
  }


    public function login()
  {
    return view('agent.session.login');
  }

  public function post_login()
  {
    if(Auth::guard('agent')->attempt(request(['email', 'password']), false)) {
      session()->put('active_tab', 'Dashboard');
      session()->flash('success-message', 'Logged In, Welcome!!');

      $response = array();
      $response[0] = array(
          'message' => 'success',
          'email'=> request(['email']),
      );
      return json_encode($response); 
    }
    
    session()->flash('fail-message', 'Login Failed. Incorrect Username or Password.');
    
     $response = array();
      $response[0] = array(
          'message' => 'fail',
      );
      return json_encode($response); 
  }

  

  public function resetPassword()
  {
    return view('agent.session.reset-password');
  }

  public function postResetPassword()
  {



    $email = request('email');
    $user = UserAgents::where('email', $email)->first();


    if($user) {
      $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < 8; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
      }

      $user->password = bcrypt($randomString);
      $user->save();
      \Mail::to($user->email)->queue(new PasswordReset($user->name, $randomString));

      session()->flash('success-message', 'New password has been successfully send to your registered email id.');
      return redirect()->route('agent.login');
    }
    // if unsuccessful, then redirect back to the login with the form data
    session()->flash('fail-message', 'No account with this username exists');
    return back();
  }



}