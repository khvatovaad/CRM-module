@extends('layout')

@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Задачи</h1>
            <button class="btn btn-sm btn-outline-secondary"><a href="{{ route('tasks.notification') }}">Нужно сделать:</a></button>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary"><a href="{{ route('tasks.create') }}">Добавить</a></button>
                <button class="btn btn-sm btn-outline-secondary">Экспорт</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
               Текущая неделя
              </button>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>Номер</th>
                  <th>Тип</th>
                  <th>Клиент</th>
                  <th>Комментарий</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($tasks as $task)
                <tr onclick="window.location = 'tasks/{{$task->id}}'">
                    
                <td> {{$task->id}}</td>
                <td>{{$task->type}}</td>
                <td>{{$task->client_id}}</td>
                <td>{{$task->comment}}</td>
                
                </tr> 
               
    
   
 @endforeach               

              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

@endsection