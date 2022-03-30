<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class Client_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client =  Client::all();
        return view('backoffice.client.list',
        [
            'client' => $client
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.client.addClient');
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

    return redirect()->route('client.list');
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
    public function edit($client)
    {
        $v2=Client::find($client);
        return view('backoffice.client.edit',['client' => $v2]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $client)
    {
        $client = Client::find($client);
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
       $client->update(
        [
            'nomC'=> $request->nomC,
            'prenom' => $request->prenom,
            'adresse'=>$request->adresse,
            'tele' => $request->tele,
            'formation'=>$request->formation,
            'typeRDV'=>$request->typeRDV,
            'datenaiss'=>$request->datenaiss,
            'email' => $request->email
           
        ]
        );

        return redirect()->route('client.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($client)
    {
        
        Client::find($client)->delete();
        return redirect()->back();
    }
}
