<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = "users";

    protected $fillable = [
        'username', 'firstname', 'lastname', 'email', 'phone', 'address', 'city', 'state', 'zip-code'
    ];
}
