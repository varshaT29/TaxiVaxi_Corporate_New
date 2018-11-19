<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookings extends Model
{
    protected $table = 'taxi_bookings';
    protected $fillable = ['id','assessment_code','package_name','client_id','taxi_type_id','tour_type_id',
    'pickup_city_id','client_rate_id','pickup_location','drop_location','bookdatetime','pickup_datetime',
    'billing_entity','spoc_id','is_send_sms','is_send_email','no_of_days','no_of_seats','passenger_id','status_id','trip_status_id',
    'trip_status_id','driver_id','taxi_id','taxi_type_assigned_id','assign_datetime','cancelled_datetime','cancel_reason',
    'assessmentcode','billing_entity','reason_for_booking','cost_center_code','secure_code','start_otp','end_otp',
    'start_signature_image_path','id'];
}
