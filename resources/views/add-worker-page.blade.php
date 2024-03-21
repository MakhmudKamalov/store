@extends('layouts.layout')

@section('content')
<div class="card">
  <div class="card-header">
    <h4>Сатыушы  косыу</h4>
  </div>
  <div class="card-body">
    <form action="{{ Route('add-worker') }}" method="POST">
      @csrf

    <div class="form-group">
      <label for="name">Аты</label>
      <input type="text" name="name" id="name" placeholder="" required value="{{ old('name') }}" class="form-control  @error('name') is-invalid @enderror">
      @error('name')
      <p style="color: red">{{ $message }}</p>
      @enderror
    </div>
    <div class="form-group">
      <label for="surname">Фамилия</label>
      <input type="text" name="surname" id="surname" placeholder="" required value="{{ old('surname') }}" class="form-control  @error('surname') is-invalid @enderror">
      @error('surname')
      <p style="color: red">{{ $message }}</p>
      @enderror  
    </div>
    <div class="form-group">
      <label for="phone">Телефон</label>
      <input type="text" maxlength="13"  name="phone" id="phone" placeholder="" required value="{{ old('phone') }}" class="form-control  @error('phone') is-invalid @enderror">
      @error('phone')
      <p style="color: red">{{ $message }}</p>
      @enderror  
    </div>
    <div class="form-group">
      <label for="salary">Айлык</label>
      <input type="text" name="salary" id="salary" placeholder="" required value="{{ old('salary') }}" class="form-control  @error('salary') is-invalid @enderror">
      @error('salary')
      <p style="color: red">{{ $message }}</p>
      @enderror  
    </div>
    <div class="card-footer text-center">
      <input type="submit" class="btn btn-success mr-1"  value="Qosiw">
    </div>

  </form>


  {{-- id="swal-2" --}}
  {{-- swal-overlay--show-modal --}}

  <div class="swal-overlay @if (session('id'))
  swal-overlay--show-modal   
  @endif" tabindex="-1">
    <div class="swal-modal" role="dialog" aria-modal="true"><div class="swal-icon swal-icon--success">
      <span class="swal-icon--success__line swal-icon--success__line--long"></span>
      <span class="swal-icon--success__line swal-icon--success__line--tip"></span>
  
      <div class="swal-icon--success__ring"></div>
      <div class="swal-icon--success__hide-corners"></div>
    </div><div class="swal-title" style="">Сатыушы косылды</div><div class="swal-text" style=""></div><div class="swal-footer"><div class="swal-button-container">
  
      <button class="swal-button swal-button--confirm"  ><a href=" " style="text-decoration: none; color:white">OK</a></button>
  
      <div class="swal-button__loader">
        <div></div>
        <div></div>
        <div></div>
      </div>
  
    </div></div></div></div>


      </div>
    </div>
  </div>


</div>@endsection