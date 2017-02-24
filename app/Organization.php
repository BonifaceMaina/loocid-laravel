<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{

    // These attributes are mass assignable.

    protected $fillable = ['name', 'location', 'description'];


}
