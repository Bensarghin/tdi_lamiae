<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class Inscription_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inscription');
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
        $request->validate([
            'nomC'=>'required|string',
            'prenom'=>'required|string',
            'adresse'=>'required|string',
            'tele'=>'required|string',
            'formation'=>'required|string',
            'typeRDV'=>'required|string',
            'datenaiss'=>'required|string',
            'email'=>'required|string',
            
       ]);
       Client::create([
        'nomC'=> $request->nomC,
        'prenom' => $request->prenom,
        'adresse'=>$request->adresse,
        'tele' => $request->tele,
        'formation'=>$request->formation,
        'typeRDV'=>$request->typeRDV,
        'datenaiss'=>$request->datenaiss,
        'email' => $request->email
        ]);

    return redirect()->back()->with('success', 'vos informations enregistrées vous masseront dès que possible sur votre téléphone ou par e-mail');
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
