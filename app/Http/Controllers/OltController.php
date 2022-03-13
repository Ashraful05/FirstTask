<?php

namespace App\Http\Controllers;

use App\Models\Mikrotik;
use App\Models\Olt;
use App\Models\OltType;
use App\Models\Vendor;
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
        $olts = Olt::all();
       return view('backend.olt.index',compact('olts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Olt $olt)
    {
        $oltTypes = OltType::all();
        $vendors = Vendor::all();
       return view('backend.olt.form',compact('olt','oltTypes','vendors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request,[
            'name'=>'required|string|max:64',
            'username'=>'required|string|max:64',
            'password'=>'required|string|max:64',
            'ip_address'=>'required|string|max:64',
            'model'=>'required|string|max:128',
            'port'=>'required|numeric|max:11',
            'olt_type_id'=> 'required|numeric|min:1',
            'vendor_id' => 'required|numeric|min:1',
        ]);

        Olt::create($data);
        return redirect()->route('olt.index')->with('message','olt info saved!!!');

//         $olt = new Olt();
//         $olt->name = $request->name;
//         $olt->username = $request->username;
//         $olt->password = $request->password;
//         $olt->model = $request->model;
//         $olt->port = $request->port;
//         $olt->ip_address = $request->ip_address;
// //        $olt->olts()->save($oltType);
//         $olt->save();
        
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
    public function edit(Olt $olt)
    {
        $oltTypes = OltType::all();
        $vendors = Vendor::all();
        return view('backend.olt.form',compact('olt','oltTypes','vendors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Olt $olt)
    {
        $data = $this->validate($request,[
             'name'=>'required|string|max:64',
             'username'=>'required|string|max:64',
             'password'=>'required|string|max:64',
             'ip_address'=>'required|string|max:64',
             'model'=>'required|string|max:128',
             'port'=>'required|numeric|max:11',
             'olt_type_id'=> 'required|numeric|min:1',
             'vendor_id' => 'required|numeric|min:1',
         ]);
         $olt->update($data);
         return redirect()->route('olt.index')->with('message','olt info updated!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Olt $olt)
    {
        $olt->delete();
        return redirect()->route('olt.index')->with('message','olt info deleted!!!');
    }
}
