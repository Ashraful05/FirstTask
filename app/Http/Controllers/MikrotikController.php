<?php

namespace App\Http\Controllers;

use App\Models\Mikrotik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MikrotikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        dd('hi');
        return view('backend.mikrotik.mikrotik');
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
        $this->validate($request,[
           'name'=>'required|max:64',
           'user_name'=>'required|max:64',
           'password'=>'required|max:64',
            'ip_address'=>'required|max:15',
            'ssh_port'=>'required',
            'api_port'=>'required',
        ]);
       $mikrotik = new Mikrotik();
       $mikrotik->name = $request->name;
       $mikrotik->user_name = $request->user_name;
       $mikrotik->password = Hash::make($request->password);
       $mikrotik->ssh_port = $request->ssh_port;
       $mikrotik->api_port = $request->api_port;
       $mikrotik->ip_address = $request->ip_address;
       $mikrotik->save();
//       return $mikrotik;
//       dd($result);
       return redirect()->back()->with('message','Mikrotik Info saved successfully!!');
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
