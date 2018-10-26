<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    protected $table = 'bookings';
    protected $fillable = ['taxibooking_companyname','tourtype','pickup_location','drop_location','bookingdatetime','no_of_seats','pickupdatetime',
    'assessmentcode','billing_entity','reason_for_booking','id'];
}
