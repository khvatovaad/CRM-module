


@extends('layout')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            
            
          </div>


        
       
         
<form method="POST" action="/tasks">
@csrf
  <div class="form-row">
  <div class="form-group col-md-6">
  <label for="type">Тип задачи</label>
      <!-- <input type="text" class="form-control" id="type" name="type" value=""> -->
      
      <select class="form-control" name="type"> <!--Supplement an id here instead of using 'name'-->
      @foreach ($types ?? '' as $type)
      <option value="{{$type}}">{{$type}}</option> 
     
    @endforeach               
    </select>
  </div> 
   
    <div class="form-group col-md-6">
      
      <label for="client_id">Клиент</label>
    
      <select class="form-control" name="client_id"> <!--Supplement an id here instead of using 'name'-->
      @foreach ($clients as $client)
      <option value="{{$client->name}}">{{$client->name}}</option> 
     
    @endforeach               
    </select>
      
    </div></div>

   
 
  <div class="form-row">
  <div class="form-group col-md-6">
  <label for="time_start">Дата начала</label>
    <input type="date" class="form-control" id="time_start" name="time_start" value="">
  </div>
  <div class="form-group col-md-6">
  <label for="time_end">Дата окончания</label>
    <input type="date" class="form-control" id="time_end"  name="time_end" value="">
  </div>
  <div class="form-group col-md-12">
    <label for="inputAddress">Комментарий</label>
    <textarea type="text" class="form-control" id="comment"  name="comment" value=""></textarea>
  </div>
  </div>
 
  
 

  <button type="submit" class="btn btn-primary">Добавить</button>
  
</form>



</div>

</main>
@endsection
