<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Doctor;
use App\Appointment;

class Patient extends Model
{
   
   protected $fillable = [
        'firstname', 'middlename', 'lastname','address','contact','profileurl','user_id'
    ];

    public function updatePatient(Request $request){
    		$this->firstname = $request->firstname;
    		$this->middlename = $request->middlename??"";
    		$this->lastname =  $request->lastname;
    		$this->address = $request->address;
    		$this->contact = $request->contact;
    		$this->profileurl = $request->profileurl;
    		$this->save();
    }

   public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function appointments(){
        return $this->hasMany('App\Appointment');
    }
    public function services(){
        return $this->hasMany('App\Service');
    }

    public function retrieveAppointments(){

    	$appointments = Appointment::all();
    }
}
