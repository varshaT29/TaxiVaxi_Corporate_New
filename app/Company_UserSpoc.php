<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company_UserSpoc extends Model
{
   protected $table = 'users';
   protected $fillable = ['id','admin_id','user_name','user_contact','email'];
}