<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Deal;
use App\Client;
use Carbon\Carbon;
use DB;

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
    public function create(Client $client)
    {
        // $clients = DB::table('clients')->select('id', 'name')->get();
        $clients = $client->all();
        $types = ['сайт-визитка', 'онлайн-магазин'];
        $statuses = ['первичный запрос','отправка брифа', 'получение брифа', 'переговоры', 'готовится договор'];
        return view('deal.create', compact('clients', 'types', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Deal $deal)
    {
        $deal->name = $request->name;
        $deal->type = $request->type;
        $deal->summ = $request->summ;
        $deal->time_start = $request->time_start;
        $deal->time_end = $request->time_end;
        $deal->status = $request->status;
        $deal->client_id = $request->client_id;

        $deal->save(); 
        // Client::create(request(['name']));
        return redirect('/deals');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $deal = App\Deal::find($id);
        return view('deal.show', compact('deal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client, Deal $deal)
    {
        $clients = $client->all();
        $types = ['сайт-визитка', 'онлайн-магазин'];
        $statuses = ['первичный запрос','отправка брифа', 'получение брифа', 'переговоры', 'готовится договор'];
        return view('deal.edit', compact('deal','clients', 'types', 'statuses'));
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deal $deal)
    {
        $deal->name = $request->name;
        $deal->type = $request->type;
        $deal->summ = $request->summ;
        $deal->time_start = $request->time_start;
        $deal->time_end = $request->time_end;
        $deal->status = $request->status;
        $deal->client_id = $request->client_id;

        $deal->save(); 
        // Client::create(request(['name']));
        return redirect('/deals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deal $deal)
    {
        $deal->delete();//
        return redirect('/deals');
    }

    public function Favorite(Deal $deal)
    {
        $deals = $deal->where('favorite', '=', 'true')->get();
        return view('deal.favorite', compact('deals'));
    }
}
