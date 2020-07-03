<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Doctor;
use App\Appointment;

class Appointment extends Model
{

	 protected $fillable = ['scheduled_at', 'title','user_id','patient_id','expert_id']; 

	publich function makeAppointment(Request $request){
		$this->expertid =  $request->expertid;
		$this->patientid =  $request->patientid;
		$this->serviceid =  $request->serviceid;
		$this->schedule = $request->schedule;
		$this->title = $request->title;
		$this->save();
	}

	function patients(){
		return belongsTo('App\Patient');
	}

	function experts(){
		return belongsTo('App\Expert');
	}

	function services(){
		return belongsTo('App\Service');
	}
}
