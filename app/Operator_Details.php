<?php

namespace app;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Operator_Details extends Authenticatable
{
   
    protected $table = 'operators';
    protected $fillable = ['id','username', 'type', 'password','old_password','operator_name','operator_email','operator_contact','website',
        'contact_name','contact_email','contact_no','operator_address','beneficiary_name','beneficiary_account_no',
        'bank_name','ifsc_code','is_service_tax_applicable','service_tax_number','gst_id','tds_rate','pan_no','night_start_time','night_end_time',''];
}
