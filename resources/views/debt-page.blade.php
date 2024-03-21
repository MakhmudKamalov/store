@extends('layouts.layout')


@section('content')
<div class="card ">
<div class="container">

  <div class="table-responsive">
    
    <div class="section-title">Карзлар</div>
    <div class="form-group">
      @livewire('search-otchet')
    </div>
@if (!session('livewire'))
  <table class="table">
    <thead>
      <tr>
        <th scope="col">№</th>
        <th scope="col">Сатылган зат</th>
        <th scope="col">Сатыушы аты</th>
        <th scope="col">Саны</th>
        <th scope="col">Пулы</th>
        <th scope="col">Карздар</th>
        <th scope="col">Телефоны</th>
        <th scope="col">Коментария</th>
        <th scope="col">Сане</th>
        <th scope="col">Опция</th>
      </tr>
    </thead>
    <tbody>
      @php
        $a=1;
      @endphp
      @foreach ($debt as $v)
        
      <tr>
        <th scope="row">{{ $a++ }}</th>
        <td>{{ $v['name'] }}</td>
        <td>{{ $v['worker_name'] }}</td>
        <td>{{ $v['count'] }} дана</td>
        <td><mark>{{ number_format($v['pul'])}} UZS</mark></td>
        <td>{{ $v['debtor'] }} </td>
        <td>{{ $v['phone1'].' '.$v['phone2']  }} </td>
        <td>{{ $v['comment'] }}</td>
        <td>{{ $v['created_at'] }}</td>
        <td>
                            <a href="{{ route('satiw-form-page', ['id' => $v['id'],'type'=>$v['type'] ]) }}" class="btn btn-success">Толеу</a>
                            <a href="{{ route('satiw-form-page', ['id' => $v['id'],'type'=>$v['type'] ]) }}" class="btn btn-warning">Косыу</a>
                            <a href="{{ route('satiw-form-page', ['id' => $v['id'],'type'=>$v['type'] ]) }}" class="btn btn-danger">Ошириу</a>

                          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endif
</div>
</div>

</div>

@endsection