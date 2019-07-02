<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function users()
    {
        return $this->hasOne('App\User','id');
    }

    //
    public $timestamps = false;
    protected $fillable = [ 'comp_category','cat_details','user_id'];
}
