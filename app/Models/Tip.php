<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tip extends Model
{


    protected $fillable= ['title', 'subtitle','content','image'];
}
