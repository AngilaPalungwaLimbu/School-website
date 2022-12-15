<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\School;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $school=School::first();
        return view("backend.school.index",compact('school'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.school.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $school=new School();
        $school->name=$request->name;
        $school->address=$request->address;
        $school->email=$request->email;
        $school->contact=$request->contact;
        $school->slogan=$request->slogan;
        $school->youtube=$request->youtube;
        $school->facebook=$request->facebook;
        $school->linkedin=$request->linkedin;
        $school->linkedin=$request->linkedin;
        if($request->hasFile('logo')){
            $file=$request->logo;
            $newName=time().'.'.$file->getClientOriginalExtension();
            $file->move('logo',$newName);
            $school->logo="logo/$newName";
        }
        $school->save();
        return redirect('/school');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $school=School::find($id);
        return view("backend.school.edit",compact('school'));

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
        $school=School::find($id);
        $school->name=$request->name;
        $school->address=$request->address;
        $school->email=$request->email;
        $school->contact=$request->contact;
        $school->slogan=$request->slogan;
        $school->youtube=$request->youtube;
        $school->facebook=$request->facebook;
        $school->linkedin=$request->linkedin;
        $school->linkedin=$request->linkedin;
        if($request->hasFile('logo')){
            $file=$request->logo;
            $newName=time().'.'.$file->getClientOriginalExtension();
            $file->move('logo',$newName);
            $school->logo="logo/$newName";
        }
        $school->update();
        return redirect('/school');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
