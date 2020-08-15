<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table ='customer';
    protected $fillable =[
        'Customerid',
        'Customername',
        'customerpass',
        'Customeremail',
        'Customerphone',
        'Customeraddress',
    ];
}
