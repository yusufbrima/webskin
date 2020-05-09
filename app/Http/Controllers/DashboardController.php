<?php

namespace App\Http\Controllers;

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
        $id =  auth()->user()->id;
        $user = User::find($id);

        return view('dashboard')->with('doctors',$user->doctors()->paginate(4));
    }
}
