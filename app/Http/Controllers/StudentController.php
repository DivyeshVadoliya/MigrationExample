<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $student=DB::table('student')->get();
        $student=DB::table('student')->paginate(4);
        return view('home',['student'=>$student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


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
         DB::table('student')->insert([
                'name'=>$request->name,
                'email'=>$request->email,
                'gender'=>$request->gender,
                'address'=>$request->address,
                'marks'=>$request->marks,
        ]);
        return redirect(route('index'))->with('status','student Data Added ...');
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
        //
        $student=DB::table('student')->find($id);
        //dd($student);
        return view('editpage',['student'=>$student]);
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
        //
        //dd($request);
        DB::table('student')->where('id' , $id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'gender'=>$request->gender,
                'address'=>$request->address,
                'marks'=>$request->marks,
        ]);
        return redirect(route('index'))->with('status','student Data Updated ...');
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
        DB::table('student')->where('id',$id)->delete();
        return redirect(route('index'))->with('status','student Data Deleted...');
    }
}
