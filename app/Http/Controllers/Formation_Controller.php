<?php

namespace App\Http\Controllers;
use App\Models\Programme;
use Illuminate\Support\Facades\Hash;
use App\Models\Formation;

use Illuminate\Http\Request;

class Formation_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formation =  Formation::all();
        return view('backoffice.Formation.listF',
        [
            'formations' => $formation
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programme =  Programme::all();
        return view('backoffice.Formation.addF',[
            'programmes' => $programme
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomF'=>'required|string|Unique:formations,nomF',
            'description'=>'required|string',
            'duree'=>'required|string',
            'prix'=>'required|string',
            'titre'=>'required',
       ]);
            Formation::create([
                'nomF' => $request->nomF,
                'description' => $request->description,
                'duree' => $request->duree,
                'prix' => $request->prix,
                'programme_id' => $request->titre
            ]);
    
            return redirect()->route('formation.listF');
    }

    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        $programme =  Programme::all();
        $v2=Formation::find($id);
        return view('backoffice.Formation.edit',
        ['formations' => $v2 ,'programmes' => $programme]);
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
        $formations = Formation::find($id);
        $request->validate([
            'nomF'=>'required|string',
            'description'=>'required|string',
            'duree'=>'required|string',
            'prix'=>'required|string',
            
           
       ]);
       $formations->update(
        [
            'nomF'=> $request->nomF,
            'description' => $request->description,
            'duree'=>$request->duree,
            'prix' => $request->prix
            
        ]
        );

        return redirect()->route('formation.listF');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Formation::find($id)->delete();
        return redirect()->back();
    }
}
