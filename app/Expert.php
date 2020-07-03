<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    //

 protected $fillable = [
        'firstname', 'middlename', 'lastname','address','contact','profileurl','bio','facebook','twitter','linkedin','googleplus','altemail','user_id'
    ];


    public function users(){
        return $this->belongsTo('App\User');
    }

    public function appointments()
    {
        return $this->hasMany('App\Appointment');
    }

    public function services()
    {
        return $this->hasMany('App\Service');
    }

    public function qualifications()
    {
        return $this->hasMany('App\Qualification');
    }

    public function avaibility()
    {
        return $this->hasMany('App\Avaibility');
    }
}
