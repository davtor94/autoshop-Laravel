<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    //
    protected $fillable= ['placas', 'marca','submarca','modelo','color','user_id'];
}
