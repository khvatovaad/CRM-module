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
      <form action="{{ route('clients.update',$client->id) }}" method="POST">
        @csrf
        @method('PUT')
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Наименование компании</label>
      <input type="text" class="form-control" id="name" name="name"  value="{{ $client->name }}">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Деятельность</label>
      <input type="text" class="form-control" id="activity" name="activity" value="{{ $client->activity }}">
    </div>
    <div class="form-group col-md-4">
      <label for="inputPassword4">Адрес сайта</label>
      <input type="text" class="form-control" id="site" name="site" value="{{ $client->site }}">
    </div>
  </div>
 
  <div class="form-row">
  <div class="form-group col-md-6">
  <label for="inputAddress">Номер телефона</label>
    <input type="text" class="form-control" id="phone1" name="phone1" value="{{ $client->phone1 }}">
  </div>
  <div class="form-group col-md-6">
  <label for="inputAddress">Дополнительный номер телефона</label>
    <input type="text" class="form-control" id="phone2"  name="phone2" value="{{ $client->phone2 }}">
  </div>
  <div class="form-group col-md-6">
  <label for="inputAddress">Email</label>
    <input type="text" class="form-control" id="email1"  name="email1" value="{{ $client->email1 }}">
  </div>
  <div class="form-group col-md-6">
  <label for="inputAddress">Дополнительный Email</label>
    <input type="text" class="form-control" id="email2" name="email2" value="{{ $client->email2 }}">
  </div> </div>
  <div class="form-group">
    <label for="inputAddress">Адрес</label>
    <input type="text" class="form-control" id="address" name="address" value="{{ $client->address }}" >
  </div>
  <div class="form-group">
    <label for="inputAddress">Комментарий</label>
    <textarea type="text" class="form-control" id="comment"  name="comment" value="">{{ $client->comment }}</textarea>
  </div>
 

  <button type="submit" class="btn btn-primary">Обновить</button>
  
</form>
</div>

</main>
@endsection
