<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    //

    function experts(){
		return belongsTo('App\Experts');
	}
}
