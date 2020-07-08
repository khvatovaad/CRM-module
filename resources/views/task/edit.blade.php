@extends('layout')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            
            
          </div>
          <!-- {!! Form::open() !!}
   
          <div class="form-group">
                    {{ Form::label('name', 'Название компании:') }}
                    {{ Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) }}
                </div>
                <div class="form-group">
                    {{ Form::submit('Sign In', ['class' => 'btn btn-primary']) }}
                </div>
          {!! Form::close() !!} -->
      <form action="{{ route('tasks.update',$task->id) }}" method="POST">
        @csrf
        @method('PUT')
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
 

  <button type="submit" class="btn btn-primary">Обновить</button>
  
</form>
</div>

</main>
@endsection
