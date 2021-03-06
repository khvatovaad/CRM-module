<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Client;
use Carbon\Carbon;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Client $client)
    {
        // $clients = $client->all();
        $clients = $client->where('archive', '=', '1')->get();
        return view('client.index', compact('clients'));
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


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function New(Client $client)
    {
        $date = Carbon::now();
        echo $date;
        $clients = $client->whereDate('date', $date)->get();
        return view('client.new', compact('clients'));
    }

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function forgotten(Client $client)
    {
        $current = Carbon::now()->subDay();
        $date = Carbon::now()->subWeeks(1);
        echo $date;
        $clients = $client->whereBetween('date', [$date, $current])->get();
        return view('client.forgotten', compact('clients'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function archive(Client $client)
    {
        $client->archive = false;
        $client->save();
        return redirect('/clients');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function archiveShow(Client $client)
    {
        $clients = $client->where('archive', '=', 'true')->get();
        return view('client.archive', compact('clients'));
    }
}