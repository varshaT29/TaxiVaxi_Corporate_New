<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class TaxiTypes extends Model
{
    //
    protected $table = 'taxi_types';
    protected $fillable = ['id','name',];
}