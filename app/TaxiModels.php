<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class TaxiModels extends Model
{
    //
    protected $table = 'taxi_models';
    protected $fillable = ['id','name','taxi_type_id'];
}
