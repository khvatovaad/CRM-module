@extends('layout')

@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Избранное</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary"><a href="{{ route('deals.create') }}">Добавить</a></button>
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
                  <th>Название</th>
                  <th>Тип</th>
                  <th>Сумма</th>
                  <th>Статус</th>
                  <th>Дата начала</th>
                  <th>Дата окончания</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($deals ?? '' as $deal)
                <tr onclick="window.location = 'deals/{{$deal->id}}'">
                    
                <td> {{$deal->id}}</td>
                <td>{{$deal->name}}</td>
                <td>{{$deal->type}}</td>
                <td>{{$deal->summ}}</td>
                <td>{{$deal->status}}</td>
                <td>{{$deal->time_start}}</td>
                <td>{{$deal->time_end}}</td>
               
                
                </tr> 
               
    
   
 @endforeach               

              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

@endsection