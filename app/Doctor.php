<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //

    protected $table = "Doctors";

    protected $primaryKey = "id";


    public function user(){
    	return $this->belongsTo('App\User');
    }

}
