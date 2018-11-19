<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_Details extends Model
{
    protected $table = 'employee_details';
    protected $fillable = ['client_id','employeename','employeeid','employeecontact','employeeemail','id'];
}
