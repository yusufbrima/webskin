<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Doctor;
use App\User;
class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        #$doctors = Doctor::paginate(8);
     /*   $id =  auth()->user()->id;
        $user = User::find($id);

        return view('dashboard')->with('doctors',$user->doctors()->paginate(4));*/
        return view('dashboard.index');
    }

    public function blank()
    {
        #$doctors = Doctor::paginate(8);
     /*   $id =  auth()->user()->id;
        $user = User::find($id);

        return view('dashboard')->with('doctors',$user->doctors()->paginate(4));*/
        return view('dashboard.blank');
    }

   public function tour()
    {
        #$doctors = Doctor::paginate(8);
     /*   $id =  auth()->user()->id;
        $user = User::find($id);

        return view('dashboard')->with('doctors',$user->doctors()->paginate(4));*/
        return view('dashboard.tour');
    }
}
