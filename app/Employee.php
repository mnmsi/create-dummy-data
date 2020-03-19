<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'company';
    protected $fillable = [
        'username', 'firstname', 'lastname', 'email', 'phone', 'address', 'city', 'state', 'zip-code'
    ];
}
