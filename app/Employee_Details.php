<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee_Details extends Model
{
    protected $table = 'employee_details';
    protected $fillable = ['employeename','employeeid','employeecontact','employeeemail','id'];
}
