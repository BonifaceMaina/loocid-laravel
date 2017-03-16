<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * @return mixed
     */
    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function permissions(){
        return $this->belongsToMany('App\Permissions');
    }
}
