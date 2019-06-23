<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class complainbox extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
        'category_id', 'comp_title', 'comp_details','img_path','judge_status'
    ];
}
