@extends('layout')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            
            
          </div>

<form >


      
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Наименование компании</label>
      <input type="text" class="form-control" id="name2" value="{{$client->name}}" disabled>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Деятельность</label>
      <input type="text" class="form-control" id="activity" value="{{$client->activity}}" disabled>
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Сайт компании</label>
      <input type="text" class="form-control" id="site" value="{{$client->site}}" disabled>
    </div>
  </div>
  <!-- // Контакты -->
  <div class="form-row">
  <div class="form-group col-md-6">
  <label for="inputAddress">Номер телефона</label>
    <input type="text" class="form-control" id="phone1"  value="{{$client->phone1}}" disabled>
  </div>
  <div class="form-group col-md-6">
  <label for="inputAddress">Дополнительный номер телефона</label>
    <input type="text" class="form-control" id="phone2"  value="{{$client->phone2}}" disabled>
  </div>
  <div class="form-group col-md-6">
  <label for="inputAddress">Email</label>
    <input type="text" class="form-control" id="email1"  value="{{$client->email1}}" disabled>
  </div>
  <div class="form-group col-md-6">
  <label for="inputAddress">Дополнительный Email</label>
    <input type="text" class="form-control" id="email2"  value="{{$client->email2}}" disabled>
  </div> </div>
  <div class="form-group">
    <label for="inputAddress">Адрес</label>
    <input type="text" class="form-control" id="inputAddress" value="{{$client->address}}" disabled>
  </div>
  <div class="form-group">
    <label for="inputAddress">Комментарий</label>
    <textarea type="text" class="form-control" id="inputAddress" disabled>{{$client->comment}}</textarea>
  </div>
 

  
  
  </form>
  <div class="container">
  <div class="row">
  <a href="{{ route('clients.edit',$client->id) }}" class="btn btn-primary mr-2">Редактировать</a>
  <form action="{{ route('clients.destroy',$client->id) }}" method="POST">

@csrf
@method('DELETE')
                    <button type="submit" class="btn btn-danger">Удалить</button>
 
</form>
</div>
</div>
</div>

</main>
@endsection
