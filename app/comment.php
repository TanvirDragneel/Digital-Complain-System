<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
        'user','comp_id','comp_comments',
    ];
    public function users()
    {
        return $this->hasMany('App\user','id','user');
    }

}
