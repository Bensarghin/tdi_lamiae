<?php

namespace App\Http\Controllers;
use App\Models\Programme;
use Illuminate\Http\Request;

class Programme_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programme =  Programme::all();
        return view('backoffice.programme.listP',
        [
            'programme' => $programme
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.programme.addP');
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
            'nomP'=>'required|string',
            'titre'=>'required|string',
           
            
       ]);
       Programme::create([
        'nomP'=> $request->nomP,
        'titre' => $request->titre,
      
        
    ]);

    return redirect()->back();
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
    public function edit($programme)
    {
        $v2=Programme::find($programme);
        return view('backoffice.programme.listP',['programme' => $v2]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $programme)
    {
        $programme = Programme::find($programme);
        $request->validate([
            'nomP'=>'required|string',
            'titre'=>'required|string',
            
            
       ]);
       $programme->update(
        [
            'nomP'=> $request->nomP,
            'titre' => $request->titre,
           
           
        ]
        );

        return redirect()->route('programme.listP');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($programme)
    {
        Programme::find($programme)->delete();
        return redirect()->back();
    }
}
