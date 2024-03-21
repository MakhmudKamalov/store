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
<div class="card ">
<div class="container">

  <div class="table-responsive">
    
    <div class="section-title">Сатыушылар</div>
    <div class="add-user">
      <a href="{{ Route('add-worker-page') }}" class="btn btn-icon icon-left btn-primary">  <i class="far fa-edit"></i>Сатыушы  косыу</a>
    </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">№</th>
        <th scope="col">ФИО</th>
        <th scope="col">Телефон</th>
        <th scope="col">Айлык</th>
        <th scope="col">Изменить / Удалить</th>
      </tr>
    </thead>
    <tbody>
      @php
        $a=1;
      @endphp
      @foreach ($workers as $v)
        
      <tr>
        <th scope="row">{{ $a++ }}</th>
        <td>{{ $v['surname'].' '.$v['name'] }}</td>
        <td>{{ $v['phone'] }}</td>
        <td>{{ $v['salary'] }}</td>
        <td>
          <a href="{{ route('update-worker', ['id' => $v['id'] ]) }}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a>
          <a  href="{{ route('delete-worker', ['id' => $v['id'] ]) }}" class="btn btn-danger btn-action" data-toggle="tooltip" title="" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?" data-confirm-yes="alert('Deleted')" data-original-title="Delete"><i class="fas fa-trash"></i></a>
          
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
</div>

</div>

@endsection