<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Deal;
class DealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Deal $deal)
    {
        $deals = $deal->all();
        return view('deal.index', compact('deals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Client $client)
    {
        
        $client->name = $request->name;
        $client->address = $request->address;
        $client->phone1 = $request->phone1;
        $client->phone2 = $request->phone2;
        $client->email1 = $request->email1;
        $client->email2 = $request->email2;
        $client->site = $request->site;
        $client->activity = $request->activity;
        $client->comment = $request->comment;
        $client->save(); 
        // Client::create(request(['name']));
        return redirect('/clients');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $client = App\Client::find($id);
        return view('client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('client.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $client->name = $request->name;
        $client->address = $request->address;
        $client->phone1 = $request->phone1;
        $client->phone2 = $request->phone2;
        $client->email1 = $request->email1;
        $client->email2 = $request->email2;
        $client->site = $request->site;
        $client->activity = $request->activity;
        $client->comment = $request->comment;
        $client->save(); 
        // Client::create(request(['name']));
        return redirect('/clients');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();//
        return redirect('/clients');
    }
}
