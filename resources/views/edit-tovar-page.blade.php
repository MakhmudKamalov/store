@extends('layouts.layout')

@section('content')
<div class="card">
  <div class="card-header">
    <h4>Озгертиу</h4>
  </div>
<div class="card-body">
  <form action="{{route('updateTovar')}}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $tovar['id'] }}">
    <input type="hidden" name="type" value="{{ $tovar['type'] }}">
    <div class="form-group">
      <label>Аты</label>
      <input type="text" name="name" required placeholder="" value="{{ $tovar['name'] }}" class="form-control">
    </div>
    <div class="form-group">
      <label>Для?</label>
      <select class="form-control" name="for" required>
        @if ($tovar['for'] == 'iPhone')
        <option>iPhone</option>
        <option>Samsung</option>
        <option>Universal</option>
        <option>Basqa</option>
        @elseif ($tovar['for'] == 'Samsung')
        <option>Samsung</option>
        <option>iPhone</option>
        <option>Universal</option>
        <option>Basqa</option>
        @elseif ($tovar['for'] == 'Universal')
        <option>Universal</option>
        <option>iPhone</option>
        <option>Samsung</option>
        <option>Basqa</option>
        @else
        <option>Basqa</option>
        <option>iPhone</option>
        <option>Samsung</option>
        <option>Universal</option>
        @endif
      </select>
    </div>
    <div class="form-group">
      <label>Количество</label>
      <input type="number" name="quantity" value="{{ $tovar['quantity'] }}" required class="form-control">
    </div>
    <div class="form-group">
      <label>Цена</label>
      <input type="number" name="price" value="{{ $tovar['price'] }}" required class="form-control">
    </div>
  </div>
  <div class="card-footer text-center">
    <input type="submit" class="btn btn-success mr-1" value="Саклау">
  </form>


  
  <div class="swal-overlay @if (session('edit-tovar'))
  swal-overlay--show-modal   
  @endif" tabindex="-1">
    <div class="swal-modal" role="dialog" aria-modal="true"><div class="swal-icon swal-icon--success">
      <span class="swal-icon--success__line swal-icon--success__line--long"></span>
      <span class="swal-icon--success__line swal-icon--success__line--tip"></span>
  
      <div class="swal-icon--success__ring"></div>
      <div class="swal-icon--success__hide-corners"></div>
    </div><div class="swal-title" style="">Товар озгертилди!</div><div class="swal-text" style=""></div><div class="swal-footer"><div class="swal-button-container">
  
      <button class="swal-button swal-button--confirm"  ><a href="{{ Route('all-stock') }}" style="text-decoration: none; color:white">OK</a></button>
  
      <div class="swal-button__loader">
        <div></div>
        <div></div>
        <div></div>
      </div>
  
    </div></div></div></div>


</div>



@endsection