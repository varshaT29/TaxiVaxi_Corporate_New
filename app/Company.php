<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
   protected $table = 'taxivaxiclients';
   protected $fillable = ['companyname','companycode','contactperson','contactnumber','contactemail','companypassword','companybillingname',
   'companybillingaddress','companygst','companyapprovaltype','companybookingtype','spoc_approval','admin_approval','hasapproverlevel',
   'hasbothapprover','hasnoapprover','radio_booking','local_booking','outstation_booking','bus_booking','train_booking','flight_booking','hotel_booking'];
}