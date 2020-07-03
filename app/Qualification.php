<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    //
     protected $fillable = [
        'title', 'organization', 'obtained_at','documenturl','expert_id',
    ];

    function experts(){
    	return belongsTo('App\Expert');
    }
}
