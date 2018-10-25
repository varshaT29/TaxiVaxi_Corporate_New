<?php

namespace app\Http\Controllers\TVAgent\Landing;

use Illuminate\Http\Request;
use app\Http\Controllers\TVAgent\Controller;



class LandingController extends Controller
{
  protected $operator_id;

  public function landing()
  {
    return view('landing.landing');
  }

  public function contact()
  {
    return view('landing.contact');
  }

}
