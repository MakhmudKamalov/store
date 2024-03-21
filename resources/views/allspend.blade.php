@extends('layouts.layout')

@section('content')

<div class="card">
                  <div class="card-header">
                    <h4>Расходлар дизими</h4>
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Неге?</th>
                          <th scope="col">Канша?</th>
                          <th scope="col">Кашан?</th>
                          <th scope="col">Опция</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                        $a = 1;
                        @endphp
                        @foreach ($spend as $v)
                        <tr>
                          <th scope="row">{{ $a++ }}</th>
                          <td><b>{{ $v['name'] }}</b></td>
                          <td><mark>{{number_format( $v['price'])}} UZS</mark></td>
                          <td>{{ $v['created_at'] }}</td>
                          <td><button onclick="confirmDelete('delete-spend/{{$v['id']}}')" class="btn btn-danger">Удалить</button></td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>

                <script>
    function confirmDelete(url) {
        if (confirm("Siz rasxodti bazadan oshirajqsiz?")) {
            window.location.href = url;
        }
    }
</script>

@endsection