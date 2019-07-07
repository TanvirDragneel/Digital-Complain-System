<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
    public function users()
    {
        return $this->belongsTo('App\user','user','id');
    }
    public $timestamps = false;

    protected $fillable = ['user','comp_id','comp_comments'];
}
