<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Patient;
use App\Expert;

class ProfilesController extends Controller
{

      public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $user_id =  Auth::user()->id;  #auth()->user('id');
        $user =  User::find($user_id);
        $loggedInUser = null;
        if($user->id == 1){
            $loggedInUser =  $user->patients();
        }elseif ($user->id == 2) {
            $loggedInUser =  $user->experts();
        }else{
            $loggedInUser = null;
        }
        $totalExperts =  User::where('role_id',2)->count();
        $totalPatients = User::where('role_id',1)->count();
        $allUsers =  User::paginate(4);
        return view('dashboard.index')->with([
            'totalPatients' => $totalPatients,
            'totalExperts' => $totalExperts,
            'loggedInUser' => $loggedInUser,
            'allUsers' => $allUsers
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dashboard.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('dashboard.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return  redirect('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         return  redirect('profile.index');
    }
}
