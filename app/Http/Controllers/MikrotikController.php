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
        $mikrotiks = Mikrotik::all();
        return view('backend.mikrotik.index', compact('mikrotiks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Mikrotik $mikrotik)
    {
        return view('backend.mikrotik.form', compact('mikrotik'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $this->validate($request, [
            'name' => 'required|max:64',
            'user_name' => 'required|string|max:64',
            'password' => 'required|max:64',
            'ip_address' => 'required|max:15',
            'ssh_port' => 'required|numeric|max:65,535|min:1',
            'api_port' => 'required|numeric|max:65,535|min:1',
        ]);
        
        $mikrotik = new Mikrotik();
        $mikrotik->name = $request->name;
        $mikrotik->user_name = $request->user_name;
        $mikrotik->password = $request->password;
        $mikrotik->ssh_port = $request->ssh_port;
        $mikrotik->api_port = $request->api_port;
        $mikrotik->ip_address = $request->ip_address;
        $mikrotik->save();
        dd($mikrotik);
        //       return $mikrotik;
        //       dd($result); //->withErrors()
        return redirect()->route('mikrotik.index')->with('message', 'Mikrotik Info saved successfully!!');
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
    public function edit(Mikrotik $mikrotik)
    {
        return view('backend.mikrotik.form', compact('mikrotik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mikrotik $mikrotik)
    {
        $data = $this->validate($request, [
            'name' => 'required|max:64',
            'user_name' => 'required|max:64',
            'password' => 'required|max:64',
            'ip_address' => 'required|max:15',
            'ssh_port' => 'required',
            'api_port' => 'required',
        ]);
        $mikrotik->update($data);
        return redirect()->route('mikrotik.index')->with('message', 'Mikrotik Info updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mikrotik $mikrotik)
    {
        $mikrotik->delete();
        return redirect()->route('mikrotik.index')->with('message', 'Mikrotik Info deleted successfully!!');
    }
}
