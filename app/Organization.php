<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{

    // These attributes are mass assignable.

    protected $fillable = ['name', 'mission','vision', 'datefounded', 'videolink', 'location', 'general_description', 'privileged_content',
       'photo_id', 'email' ];

    public function photo() {
        return $this->belongsTo('App\Photo');
    }

    public function projects() {
        return $this->hasMany('App\Project');
    }
}
