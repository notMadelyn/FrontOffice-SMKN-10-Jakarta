<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use App\Models\Meet;
use App\Models\Utility;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tdata = Visitor::orderBy('created_at', 'DESC')->get();
        $meet = Meet::get();
        $utility = Utility::get();

        // dd($t);
        return view('visitor.index', compact('tdata','meet','utility'));
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
        $tdata = Visitor::create([
            "name" => $request->name,
            "address" => $request->address,
            "instance" => $request->instance,
            "phone_number" => $request->phone_number,
            "meet_id" => $request->meet_id,
            "utility_id" => $request->utility_id,
            "desc" => $request->desc
        ]);

        // dd($tdata);
        return redirect()->back()->with('status', 'Success')->with('data',$tdata);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $visitor=Visitor::where('id',$id)->first();
        // return view('visitor.index' , compact('visitor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitor $visitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitor $visitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitor $visitor, $id)
    {
        // if($id = 'id'){
        //     $id = $visitor->id;
        // }

        $visitor = Visitor::find($id);
        $visitor->delete();
        // dd($visitor);
        return redirect()->back();
    }
}
