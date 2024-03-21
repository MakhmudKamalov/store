@extends('layouts.layout')

@section('content')
<div class="card">
  <div class="card-header">
    <h4>Зат сатыу болими</h4>
  </div>
  <div class="card-body">
    <form action="/satiwTovar" method="POST">
      @csrf
<input type="hidden" name="ID" value="{{ $product['id'] }}">
<input type="hidden" name="type" value="{{ $product['type'] }}">
<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="name">Аты</label>
      <p><b>{{ $product['name'] }}</b></p>
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="surname">Категория</label>
      <p><b>{{ $product['type'] }}</b></p>

    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="phone">Для</label>
      <p><b>{{ $product['for'] }}</b></p>

    </div>
  </div>
  
</div>

<div class="row">
  <div class="col">
<div class="form-group">

  <label for="">Сатыушы сайлан</label>
  <select class="form-control -sm" name="worker" id="" required>
    <option  value="" selected>....</option>
    @foreach ($worker as $v)
    <option value="{{ $v['id'] }}">{{ $v['surname'].' '.$v['name'] }}</option>
    @endforeach
  </select>
</div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="name">Бахасы</label>
      <p><b>{{number_format($product['price'])}} sum</b></p>
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="name">Складтагы саны</label>
      <p><b>{{ $product['quantity'] }}</b></p>
    </div>
  </div>
</div>
<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="salary">Товар саны</label>
      <input type="number" min="0" style="width: 300px" max="{{ $product['quantity'] }}" name="count" id="salary" placeholder="" required value="{{ old('count') }}" class="form-control  @error('count') is-invalid @enderror">
      @error('count')
      <p style="color: red">{{ $message }}</p>
      @enderror  
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="">Толеу тури</label>
<select name="tolem" id="" class="form-control" style="width: 110px">
<option value="Naq">Наличка</option>
<option value="Plastik">Карта</option>
<option value="Podarka">Подарка</option>
</select>
    </div>
  </div>
  <div class="col"></div>
  <div class="col"></div>
  <div class="col"></div>
</div>
<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="">Коментария</label>
      <textarea name="comment" placeholder="Коментария...." id="" class="form-control" cols="30" rows="10"></textarea>
    </div>

  </div>
  <div class="col">
<label for=""></label>
    <div class="card-footer text-center">
      <input type="submit" class="btn btn-success "  value="Satiw">
    </div>

  </div>
  <div class="col"></div>
</div>




  </form>


  {{-- id="swal-2" --}}
  {{-- swal-overlay--show-modal --}}

  <div class="swal-overlay @if (session('satildi'))
  swal-overlay--show-modal   
  @endif" tabindex="-1">
    <div class="swal-modal" role="dialog" aria-modal="true"><div class="swal-icon swal-icon--success">
      <span class="swal-icon--success__line swal-icon--success__line--long"></span>
      <span class="swal-icon--success__line swal-icon--success__line--tip"></span>
  
      <div class="swal-icon--success__ring"></div>
      <div class="swal-icon--success__hide-corners"></div>
    </div><div class="swal-title" style="">Товар сатылды</div><div class="swal-text" style=""></div><div class="swal-footer"><div class="swal-button-container">
  
      <button class="swal-button swal-button--confirm"  ><a href="{{ Route('satiw-page') }}" style="text-decoration: none; color:white">OK</a></button>
  
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