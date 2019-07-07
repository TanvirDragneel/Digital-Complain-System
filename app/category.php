<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function users()
    {
        return $this->hasMany('App\User','id','user_id');
    }

    //
    public $timestamps = false;
    protected $fillable = [ 'comp_category','cat_details','user_id'];
}
