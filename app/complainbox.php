<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class complainbox extends Model
{
    public function category()
    {
        return $this->belongsTo(category::class);
    }
    //every thing ok relation


    //
    public $timestamps = false;
    protected $fillable = [
        'category_id','user_id', 'comp_title', 'comp_details','img_path','judge_status',
    ];



}
