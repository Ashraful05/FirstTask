<?php

namespace App\Http\Controllers;

use App\Models\OltType;
use App\Models\Vendor;
use Illuminate\Http\Request;

class OltTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oltTypes = OltType::all();
        return view('backend.olttypes.olttype_view',compact('oltTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.olttypes.olttypes');
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
            'name'=>'required|max:32'
        ]);
        $oltType = new OltType();
        $oltType->name = $request->name;
        $oltType->save();
//        $oltType->oltType()->associate($olt)->save();
        return redirect()->back()->with('message','OLT Info Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $oltType = OltType::find($id);
        return view('backend.olttypes.show',compact('oltType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(OltType $olttype)
    {
        return view('backend.olttypes.edit',compact('olttype'));
//        dd($olttype->id);
//        $id = $olttype->id;
//        $olttype->id;
//        $olttype->name;
////        dd($name);
//        return view('backend.olttypes.edit',['id'=>$id,'name'=>$name]);
//        return $oldtype;
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = OltType::find($id);
        $delete->delete();
        return redirect()->back()->with('message','deleted successfully!!');
    }
}
