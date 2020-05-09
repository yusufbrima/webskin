<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Doctor;

class DoctorsController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultset['services'] = Service::orderBy('created_at','desc')->get();
        $resultset['doctors'] = Doctor::orderBy('created_at','desc')->take(8)->get(); 
        return view('pages.index')->with('resultset',$resultset);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'bio' => 'required'
        ]);
        $doctor =  new Doctor();

        $doctor->title = $request->title;
        $doctor->firstname = $request->firstname;
        $doctor->middlename = $request->middlename??"";
        $doctor->lastname = $request->lastname;
        $doctor->email = $request->email;
        $doctor->address = $request->address;
        $doctor->bio = $request->bio;
        $doctor->user_id = auth()->user()->id;
        $doctor->telephone = $request->telephone;
        $doctor->qualification = $request->qualification;
        $doctor->save();

        return redirect('/doctors')->with('success','Doctor record added succesfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $doctor  =  Doctor::find($id);
        return view('doctors.show')->with('doctor',$doctor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('doctors.edit')->with('doctor',Doctor::find($id));
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
        
        $this->validate($request,[
            'title' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'bio' => 'required'
        ]);
        $doctor  =  Doctor::find($id);
        $doctor->title = $request->title;
        $doctor->firstname = $request->firstname;
        $doctor->middlename = $request->middlename??"";
        $doctor->lastname = $request->lastname;
        $doctor->email = $request->email;
        $doctor->address = $request->address;
        $doctor->bio = $request->bio;
        $doctor->telephone = $request->telephone;
        $doctor->qualification = $request->qualification;
        $doctor->save();

        return redirect('/doctors')->with('success','Doctor record updated succesfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $doctor =  Doctor::find($id);
        $doctor->delete();
        return redirect('/doctors')->with('error','Doctor record deleted succesfully');
    }
}
