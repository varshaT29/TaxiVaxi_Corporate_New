<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class CompanyRates extends Model
{
//
protected $table = 'company_rates';
protected $fillable = ['id','company_id','city_id','taxi_type_id','tour_type','package_name','base_rate',
'hours_included','kms_included','per_km_rate',
'per_hour_rate','night_driver_change',];
}
