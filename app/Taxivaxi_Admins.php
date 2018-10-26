<?php

namespace app;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Taxivaxi_Admins extends Authenticatable
{
   
    protected $table = 'taxivaxi_admins';
    protected $fillable = ['name', 'email', 'password','mobile','company','superadmin','emp_id','has_billing_access',
        'has_bus_booking_access','has_meal_booking_access','has_taxi_booking_access',
        'has_train_booking_access','has_flight_booking_access','shift_timing_start','shift_timing_end',];
}
