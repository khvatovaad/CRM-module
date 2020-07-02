


@extends('layout')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            
            
          </div>


        
       
         
<form method="POST" action="/deals">
@csrf
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="name">Наименование сделки</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group col-md-4">
      
      <label for="client_id">Клиент</label>
    
      <select class="form-control" name="client_id"> <!--Supplement an id here instead of using 'name'-->
      @foreach ($clients as $client)
      <option value="{{$client->id}}">{{$client->name}}</option> 
     
    @endforeach               
    </select>
      
    </div>
    <div class="form-group col-md-4">
      <label for="summ">Сумма сделки</label>
      <input type="number" class="form-control" id="summ" name="summ" value="">
    </div>
  </div>
 
  <div class="form-row">
  <div class="form-group col-md-6">
  <label for="time_start">Дата начала сделки</label>
    <input type="date" class="form-control" id="time_start" name="time_start" value="">
  </div>
  <div class="form-group col-md-6">
  <label for="time_end">Дата окончания сделки</label>
    <input type="date" class="form-control" id="time_end"  name="time_end" value="">
  </div>
  <div class="form-group col-md-6">
  <label for="status">Статус сделки</label>
  <select class="form-control" name="status"> <!--Supplement an id here instead of using 'name'-->
      @foreach ($statuses ?? '' as $status)
      <option value="{{$status}}">{{$status}}</option> 
     
    @endforeach               
    </select>
  </div>
  <div class="form-group col-md-6">
  <label for="type">Тип сделки</label>
      <!-- <input type="text" class="form-control" id="type" name="type" value=""> -->
      
      <select class="form-control" name="type"> <!--Supplement an id here instead of using 'name'-->
      @foreach ($types ?? '' as $type)
      <option value="{{$type}}">{{$type}}</option> 
     
    @endforeach               
    </select>
  </div> </div>
  
 

  <button type="submit" class="btn btn-primary">Добавить</button>
  
</form>



</div>

</main>
@endsection
