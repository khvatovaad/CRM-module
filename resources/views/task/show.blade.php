@extends('layout')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            
            
          </div>

<form >


      
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Тип</label>
      <input type="text" class="form-control" id="type" value="{{$task->type}}" disabled>
    </div>
 
  <div class="form-group col-md-6">
  <label for="inputAddress">Дата начала</label>
    <input type="text" class="form-control" id="time_start"  value="{{$task->time_start}}" disabled>
  </div>
  <div class="form-group col-md-6">
  <label for="inputAddress">Дата окончания</label>
    <input type="text" class="form-control" id="time_end"  value="{{$task->time_end}}" disabled>
  </div>
  <div class="form-group col-md-6">
  <label for="inputAddress">Клиент</label>
    <input type="text" class="form-control" id="client_id"  value="{{$task->client_id}}" disabled>
  </div> </div>
  
  <div class="form-group">
    <label for="inputAddress">Комментарий</label>
    <textarea type="text" class="form-control" id="inputAddress" disabled>{{$task->comment}}</textarea>
  </div>
 

  
  
  </form>
  <div class="container">
  <div class="row">
  <a href="{{ route('tasks.edit',$task->id) }}" class="btn btn-primary mr-2">Редактировать</a>
  <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">

@csrf
@method('DELETE')
                    <button type="submit" class="btn btn-danger">Удалить</button>
 
</form>
<form action="{{ route('Check', $task->id) }}" method="POST">
       {{ csrf_field() }}
       {{ method_field('PATCH') }}
       <button type="submit" class="btn btn-warning" style="margin-left: 10px;">Выполнено</button>
     </form>

</div>
</div>
</div>

</main>
@endsection
