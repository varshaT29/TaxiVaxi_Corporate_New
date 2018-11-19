<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class OperatorContactsDetails extends Model
{
    //
      protected $table = 'operator_contacts';
    protected $fillable = ['operator_id','name', 'email', 'phone',];
}
