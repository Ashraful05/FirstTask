<?php

namespace App\Http\Controllers;

use App\Models\Mikrotik;
use App\Models\Olt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OltController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('backend.olt.olt');
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
            'username'=>'required|max:64',
            'password'=>'required|max:64',
            'ip_address'=>'required|max:64',
            'model'=>'required|max:128',
            'port'=>'required|max:11',
        ]);
        $olt = new Olt();
        $olt->name = $request->name;
        $olt->username = $request->username;
        $olt->password = Hash::make($request->password);
        $olt->model = $request->model;
        $olt->port = $request->port;
        $olt->ip_address = $request->ip_address;
//        $olt->olts()->save($oltType);
        $olt->save();
//        return $olt;
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
