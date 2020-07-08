<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Carbon\Carbon;
use App\Client;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Task $task)
    {
        
        $tasks = $task->where('check', '=', '0')->get();
        return view('task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Client $client)
    {
        $clients = $client->all();
        $types = ['Email', 'Встреча', 'Звонок'];
        return view('task.create', compact('clients', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Task $task)
    {
        $task->type = $request->type;
        $task->time_start = $request->time_start;
        $task->time_end = $request->time_end;
        $task->comment = $request->comment;
        $task->client_id = $request->client_id;

        $task->save(); 
        // Client::create(request(['name']));
        return redirect('/tasks');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        return view('task.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('task.edit',compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $task->type = $request->type;
        $task->time_start = $request->time_start;
        $task->time_end = $request->time_end;
        $task->comment = $request->comment;
        $task->client_id = $request->client_id;

        $task->save(); 
        // Client::create(request(['name']));
        return redirect('/tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task->delete();//
        return redirect('/tasks');
    }

    public function check(Task $task)
    {
        $task->check = true;
        $task->save();
        return redirect('/tasks');
    }

    public function notification (Task $task)
    {
        $date = Carbon::now();
        $tasks = $task->whereDate('time_end', $date)->get();
        return view('task.notification', compact('tasks'));
    }

}
