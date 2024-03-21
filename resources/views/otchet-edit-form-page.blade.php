@extends('layouts.layout')

@section('style')
<style>
  .add-user {
  position: absolute;
  top: 10px;
  right: 10px;
}
</style>
@endsection

@section('content')
<div class="card">
  <div class="card-header">
    <h4>Озгертиу </h4>

    <div class="add-user">
      <a href="#" class="btn btn-icon icon-left btn-primary">  <i class="far fa-danger"></i>Товар возврат</a>
    </div>
  </div>
  <div class="card-body">
    <form action="#" method="POST">
      @csrf
<input type="hidden" name="ID" value="{{ $array['id'] }}">
<input type="hidden" name="type" value="{{ $array['type'] }}">
<input type="hidden" name="name" value="{{ $array['name'] }}">
<input type="hidden" name="for" value="{{ $array['for'] }}">
<input type="hidden" name="worker_name" value="{{ $array['worker_name'] }}">
<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="name">Аты</label>
      <p><b>{{ $array['name'] }}</b></p>
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="surname">Категория</label>
      <p><b>{{ $array['type'] }}</b></p>

    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="phone">Для</label>
      <p><b>{{ $array['for'] }}</b></p>

    </div>
  </div>
  
</div>

<div class="row">
  <div class="col">
<div class="form-group">

  <label for="">Сатыушы</label>
  <p><b>{{ $array['worker_name'] }}</b></p>
  
</div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="salary">Товар саны</label>
      <input type="number" min="0" style="width: 300px"  name="count" id="salary" placeholder="" required value="{{ $array['count'] }}" class="form-control  @error('count') is-invalid @enderror">
      @error('count')
      <p style="color: red">{{ $message }}</p>
      @enderror  
    </div>

  </div>
  <div class="col">
    <div class="form-group">
      <label for="">Толеу тури </label>
<select name="tolem" id="" class="form-control" style="width: 110px">
  @if ($array['tolem'] == 'Naq')
  <option value="Naq">Наличка</option>
<option value="Plastik">Карта</option>
<option value="Podarka">Подарка</option>

  @elseif ($array['tolem'] == 'Plastik')
  <option value="Plastik">Карта</option>
  <option value="Naq">Наличка</option>
  <option value="Podarka">Подарка</option>
  
  @else
  <option value="Podarka">Подарка</option>
  <option value="Naq">Наличка</option>
  <option value="Plastik">Карта</option>
  @endif
</select>
    </div>
  </div>
</div>
<div class="row">
  <div class="col">
   
  </div>
  <div class="col">
    
  </div>
  <div class="col"></div>
  <div class="col"></div>
  <div class="col"></div>
</div>
<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="">Коментария</label>
      <textarea name="comment" value={{ $array['comment'] }} placeholder="Коментария...." id="" class="form-control" cols="30" rows="10"></textarea>
    </div>

  </div>
  <div class="col">
<label for=""></label>
    <div class="card-footer text-center">
      <input type="submit" class="btn btn-success "  value="Saqlaw">
    </div>

  </div>
  <div class="col"></div>
</div>




  </form>


  <div class="swal-overlay @if (session('tovar-ozgertildi'))
  swal-overlay--show-modal   
  @endif" tabindex="-1">
    <div class="swal-modal" role="dialog" aria-modal="true"><div class="swal-icon swal-icon--success">
      <span class="swal-icon--success__line swal-icon--success__line--long"></span>
      <span class="swal-icon--success__line swal-icon--success__line--tip"></span>
  
      <div class="swal-icon--success__ring"></div>
      <div class="swal-icon--success__hide-corners"></div>
    </div><div class="swal-title" style="">Tovar ozgertildi !</div><div class="swal-text" style=""></div><div class="swal-footer"><div class="swal-button-container">
  
      <button class="swal-button swal-button--confirm"  ><a href="#" style="text-decoration: none; color:white">OK</a></button>
  
      <div class="swal-button__loader">
        <div></div>
        <div></div>
        <div></div>
      </div>
  
    </div></div></div></div>


      </div>
    </div>
  </div>


</div>
@endsection