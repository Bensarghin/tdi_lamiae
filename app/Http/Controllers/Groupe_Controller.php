<?php

namespace App\Http\Controllers;
use App\Models\Groupe;
use App\Models\Formation;
use Illuminate\Http\Request;

class Groupe_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $groups =  Groupe::all();
        return view('backoffice.Groupe.listGF',
        [
            'groups' => $groups
        ]); 
   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formation =  Formation::all();
        return view('backoffice.Groupe.addG',[
            'formations' => $formation
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
            'label'=>'required|string',
            
            
       ]);
       $v1 = Groupe::create(['label'=> $request->label]);
       $v1->formation()->attach($request->formation);
       
    return redirect()->route('groupe.listGF');
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
    public function edit(Groupe $groups,$formations)
    {
        $v1=Groupe::find($groups);
        $v2=Formation::find($formations);
        return view('backoffice.Groupe.editGF',
        ['formations' => $v2 ,'groups' => $v1]);
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
        $groups = Groupe::find($id);

        $request->validate([
            'label'=>'required|string'
        
       ]);
       $groups->update(
        [
            'label'=> $request->label
            
        ]
        );

        return redirect()->route('group.listGF');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Groupe::find($id)->delete();
        return redirect()->back();
    }
}
