<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Works extends Model
{
    protected $fillable = ['company' ,'job' ,'from', 'to'];
}
