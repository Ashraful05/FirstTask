<?php

namespace App\Http\Controllers;

use App\Models\RouterType;
use Illuminate\Http\Request;

class RouterTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routertypes = RouterType::all();
        return view('backend.routertype.index',compact('routertypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(RouterType $routertype)
    {
        return view('backend.routertype.form',compact('routertype'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,RouterType $routertype)
    {
        $data = $this->validate($request,[
           'name'=>'required|max:64'
        ]);
        // dd($data);
        // $routertype->save($data);
        // dd($routertype);
        $routertype = new RouterType();
        $routertype->name = $request->name;
        $routertype->save();
        return redirect()->route('routertype.index')->with('message','RouterType info added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(RouterType $routertype)
    {
        return view('backend.routertype.form',compact('routertype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RouterType $routertype)
    {
        $data = $this->validate($request,[
            'name'=>'required|string|max:64'
        ]);
        $routertype->update($data);
        return redirect()->route('routertype.index')->with('message','Router Info Updated!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RouterType $routertype)
    {
        $routertype->delete();
        return redirect()->route('routertype.index')->with('message','Router Info Deleted!!!');
    }
}
