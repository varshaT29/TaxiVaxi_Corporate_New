<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class OperatorRates extends Model
{
    //
      protected $table = 'operator_rates';
    protected $fillable = ['id','package_name', 'city_id', 'taxi_type_id','tour_type',
    'kms','hours','km_rate','hour_rate','base_rate','night_rate','fuel_rate','operator_id'];
}
