<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    //
      protected $table = 'cities';
    protected $fillable = ['id','name', 'state_id', 'city_code',];
}