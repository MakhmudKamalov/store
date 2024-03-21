@extends('layouts.layout')

@section('content')
<div class="card">
  <div class="card-header">
    <h4>Базадагы товарды жаналау</h4>
  </div>
  <div class="card-body">
    <form action="{{ Route('updatestock') }}" method="POST">
      @csrf
<input type="hidden" name="ID" value="{{ $tovar['id'] }}">
<input type="hidden" name="type" value="{{ $tovar['type'] }}">
<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="name">Аты</label>
      <p><b>{{ $tovar['name'] }}</b></p>
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="surname">Категория</label>
      <p><b>{{ $tovar['type'] }}</b></p>

    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="phone">Для</label>
      <p><b>{{ $tovar['for'] }}</b></p>

    </div>
  </div>
  
</div>

<div class="row">
  <div class="col">
  </div>
  <div class="col">
    <div class="form-group">
      <label for="name">Бахасы</label>
      <p><b>{{number_format($tovar['price'])}} sum</b></p>
    </div>
  </div>
  <div class="col">
    <div class="form-group">
      <label for="name">Складтагы саны</label>
      <p><b>{{ $tovar['quantity'] }}</b></p>
    </div>
  </div>
</div>
<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="salary">Товар саны</label>
      <input type="number" min="0"  name="quantity" placeholder="" required value="{{ old('count') }}" class="form-control  @error('count') is-invalid @enderror">
      @error('count')
      <p style="color: red">{{ $message }}</p>
      @enderror  
    </div>
  </div>
  <div class="col"></div>
  <div class="col">
    <label for=""></label>
    <div class="card-footer textcenter">
      <input type="submit" class="btn btn-success "  value="Косыу">
    </div>
  </div>
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