@extends('layout')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            
            
          </div>

<form >


      
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">Наименование компании</label>
      <input type="text" class="form-control" id="name" value="{{$deal->name}}" disabled>
    </div>
    <div class="form-group col-md-4">
      <label for="client_id">Клиент</label>
      <input type="text" class="form-control" id="activity" value="{{$deal->client_id}}" disabled>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Сумма сделки</label>
      <input type="text" class="form-control" id="summ" value="{{$deal->summ}}" disabled>
    </div>
  </div>
  <!-- // Контакты -->
  <div class="form-row">
  <div class="form-group col-md-6">
  <label for="time_start">Дата начала сделки</label>
    <input type="text" class="form-control" id="time_start"  value="{{$deal->time_start}}" disabled>
  </div>
  <div class="form-group col-md-6">
  <label for="time_end">Дата окончания сделки</label>
    <input type="text" class="form-control" id="time_end"  value="{{$deal->time_end}}" disabled>
  </div>
  <div class="form-group col-md-6">
  <label for="status">Статус сделки</label>
    <input type="text" class="form-control" id="status"  value="{{$deal->status}}" disabled>
  </div>
  
  <div class="form-group col-md-6">
    <label for="type">Тип сделки</label>
    <input type="text" class="form-control" id="type" value="{{$deal->type}}" disabled>
  </div>
  </div>
 

  
  
  </form>
  <div class="container">
  <div class="row">
  <a href="{{ route('deals.edit',$deal->id) }}" class="btn btn-primary mr-2">Редактировать</a>
  <form action="{{ route('deals.destroy',$deal->id) }}" method="POST">

@csrf
@method('DELETE')
                    <button type="submit" class="btn btn-danger">Удалить</button>

    
 
</form>

<form action="{{ route('Favorite', $deal->id) }}" method="POST">
       {{ csrf_field() }}
       {{ method_field('PATCH') }}
       <button type="submit" class="btn btn-warning" style="margin-left: 10px;">Избранное</button>
     </form>


</div>
</div>
</div>

</main>
@endsection
