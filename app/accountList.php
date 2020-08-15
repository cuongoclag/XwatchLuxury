<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class accountList extends Model
{
    protected $table ='accountList';
    protected $fillable =[
        'Customerid',
        'Username',
        'Password',
    ];
}
