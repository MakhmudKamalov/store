@extends('layouts.layout')

@section('content')
<div class="form-group">
  <div class="card">
    <div class="container">
      <br>
      @livewire('search-sell')

    </div>
    {{-- </div> --}}
@if (!session('livewire'))
                  <div class="card-header">
                    <h4>Сатыу</h4>
                  </div>
                  <div class="card-body">
                    <ul class="nav nav-pills" id="myTab3" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="all-tab3" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">Хаммеси</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="false">Чехол</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false">Адаптер</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab" aria-controls="contact" aria-selected="false">Шнур</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#contact4" role="tab" aria-controls="contact2" aria-selected="false">Наушник</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab5" data-toggle="tab" href="#contact5" role="tab" aria-controls="contact3" aria-selected="false">Другие</a>
                      </li>
                    </ul>
                    {{-- All --}}
                    <div class="tab-content" id="myTabContent2">
                      <div class="tab-pane fade active show" id="all" role="tabpanel" aria-labelledby="all-tab3">

                      <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tbody><tr>
                          <th>№</th>
                          <th>Аты</th>
                          <th>Категория</th>
                          <th>Для?</th>
                          <th>Количество</th>
                          <th>Цена</th>
                          <th>Сатыу</th>
                        </tr>

                        @php
                          $i = 1;
                        @endphp
                        @foreach($chexols as $v)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$v['name']}}</td>
                          <td>{{$v['type']}}</td>
                          <td>{{$v['for']}}</td>
                          <td><b>{{$v['quantity']}}</b> дана</td>
                          <td><mark>{{number_format($v['price'])}} UZS</mark></td>
                          <td>
                            <a href="{{ route('satiw-form-page', ['id' => $v['id'],'type'=>$v['type'] ]) }}" class="btn btn-success">Сатыу</a>
                          </td>
                          <td>
                            <a href="{{ route('debt-form-page', ['id' => $v['id'],'type'=>$v['type'] ]) }}" class="btn btn-warning">Карзга бериу</a>
                          </td>
                        </tr>
                        @endforeach 
                        @foreach($adapters as $a)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$a['name']}}</td>
                          <td>{{$a['type']}}</td>
                          <td>{{$a['for']}}</td>
                          <td><b>{{$a['quantity']}}</b> дана</td>
                          <td><mark>{{number_format($a['price'])}} UZS</mark></td>
                          <td>
                            <a href="{{ route('satiw-form-page', ['id' => $a['id'],'type'=>$a['type'] ]) }}" class="btn btn-success">Сатыу</a>
                          </td>
                          <td>
                            <a href="{{ route('debt-form-page', ['id' => $a['id'],'type'=>$a['type'] ]) }}" class="btn btn-warning">Карзга бериу</a>
                          </td>
                        </tr>
                        @endforeach 
                        @foreach($shnurs as $s)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$s['name']}}</td>
                          <td>{{$s['type']}}</td>
                          <td>{{$s['for']}}</td>
                          <td><b>{{$s['quantity']}}</b> дана</td>
                          <td><mark>{{number_format($s['price'])}} UZS</mark></td>
                          <td>
                            <a href="{{ route('satiw-form-page', ['id' => $s['id'],'type'=>$s['type'] ]) }}" class="btn btn-success">Сатыу</a>
                          </td>
                          <td>
                            <a href="{{ route('debt-form-page', ['id' => $s['id'],'type'=>$s['type'] ]) }}" class="btn btn-warning">Карзга бериу</a>
                          </td>
                        </tr>
                        @endforeach 
                        @foreach($naushniks as $n)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$n['name']}}</td>
                          <td>{{$n['type']}}</td>
                          <td>{{$n['for']}}</td>
                          <td><b>{{$n['quantity']}}</b> дана</td>
                          <td><mark>{{number_format($n['price'])}} UZS</mark></td>
                          <td>
                            <a href="{{ route('satiw-form-page', ['id' => $n['id'],'type'=>$n['type'] ]) }}" class="btn btn-success">Сатыу</a>
                          </td>
                          <td>
                            <a href="{{ route('debt-form-page', ['id' => $n['id'],'type'=>$n['type'] ]) }}" class="btn btn-warning">Карзга бериу</a>
                          </td>
                        </tr>
                        @endforeach 
                        @foreach($others as $o)
                        <tr>
                          <td>{{$i++}}</td>
                          <td>{{$o['name']}}</td>
                          <td>{{$o['type']}}</td>
                          <td>{{$o['for']}}</td>
                          <td><b>{{$o['quantity']}}</b> дана</td>
                          <td><mark>{{number_format($o['price'])}} UZS</mark></td>
                          <td>
                            <a href="{{ route('satiw-form-page', ['id' => $o['id'],'type'=>$o['type'] ]) }}" class="btn btn-success">Сатыу</a>
                          </td>
                          <td>
                            <a href="{{ route('debt-form-page', ['id' => $o['id'],'type'=>$o['type'] ]) }}" class="btn btn-warning">Карзга бериу</a>
                          </td>
                        </tr>
                        @endforeach 
                      </tbody></table>
                    </div>
                  </div>
                 </div>
                    {{--  --}}
                    {{-- <div class="tab-content" id="myTabContent2"> --}}
                      <div class="tab-pane fade " id="home3" role="tabpanel" aria-labelledby="home-tab3">

                      <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tbody><tr>
                          <th>№</th>
                          <th>Аты</th>
                          <th>Для?</th>
                          <th>Количество</th>
                          <th>Цена</th>
                          <th>Сатыу</th>
                        </tr>
                        @php
                          $ch=1;
                        @endphp
                        @foreach($chexols as $v)
                        <tr>
                          <td>{{$ch++}}</td>
                          <td>{{$v['name']}}</td>
                          <td>{{$v['for']}}</td>
                          <td><b>{{$v['quantity']}}</b> дана</td>
                          <td><mark>{{number_format($v['price'])}} UZS</mark></td>
                          <td>
                            <a href="{{ route('satiw-form-page', ['id' => $v['id'],'type'=>$v['type'] ]) }}" class="btn btn-success">Сатыу</a>
                          </td>
                          <td>
                            <a href="{{ route('debt-form-page', ['id' => $v['id'],'type'=>$v['type'] ]) }}" class="btn btn-warning">Карзга бериу</a>
                          </td>
                        </tr>
                        @endforeach 
                      </tbody></table>
                    </div>
                  </div>
                 </div>

                      <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                      <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tbody><tr>
                                                    <th>№</th>

                          <th>Аты</th>
                          <th>Для?</th>
                          <th>Количество</th>
                          <th>Цена</th>
                          <th>Сатыу</th>
                        </tr>
                        @php
                          $ad=1;
                        @endphp
                        @foreach($adapters as $a)
                        <tr>
                          <td>{{$ad++}}</td>
                          <td>{{$a['name']}}</td>
                          <td>{{$a['for']}}</td>
                          <td><b>{{$a['quantity']}}</b> дана</td>
                          <td><mark>{{number_format($a['price'])}} UZS</mark></td>
                          <td>
                            <a href="{{ route('satiw-form-page', ['id' => $a['id'],'type'=>$a['type'] ]) }}" class="btn btn-success">Сатыу</a>
                          </td>
                          <td>
                            <a href="{{ route('debt-form-page', ['id' => $a['id'],'type'=>$a['type'] ]) }}" class="btn btn-warning">Карзга бериу</a>
                          </td>
                        </tr>
                        @endforeach 
                      </tbody></table>
                    </div>
                  </div>


                      </div>
                      <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="">

                      
                      <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tbody><tr>
                                                    <th>№</th>

                          <th>Аты</th>
                          <th>Для?</th>
                          <th>Количество</th>
                          <th>Цена</th>
                          <th>Сатыу</th>
                        </tr>
                        @php
                          $sh=1;
                        @endphp
                        @foreach($shnurs as $s)
                        <tr>
                          <td>{{$sh++}}</td>
                          <td>{{$s['name']}}</td>
                          <td>{{$s['for']}}</td>
                          <td><b>{{$s['quantity']}}</b> дана</td>
                          <td><mark>{{number_format($s['price'])}} UZS</mark></td>
                          <td>
                            <a href="{{ route('satiw-form-page', ['id' => $s['id'],'type'=>$s['type'] ]) }}" class="btn btn-success">Сатыу</a>
                          </td>
                          <td>
                            <a href="{{ route('debt-form-page', ['id' => $s['id'],'type'=>$s['type'] ]) }}" class="btn btn-warning">Карзга бериу</a>
                          </td>
                        </tr>
                        @endforeach 
                      </tbody></table>
                    </div>
                  </div>


                      </div>
                      <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="">


                      <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tbody><tr>
                                                    <th>№</th>

                          <th>Аты</th>
                          <th>Для?</th>
                          <th>Количество</th>
                          <th>Цена</th>
                          <th>Опция</th>
                        </tr>
                        @php
                          $na=1;
                        @endphp
                        @foreach($naushniks as $n)
                        <tr>
                          <td>{{$na++}}</td>
                          <td>{{$n['name']}}</td>
                          <td>{{$n['for']}}</td>
                          <td><b>{{$n['quantity']}}</b> дана</td>
                          <td><mark>{{number_format($n['price'])}} UZS</mark></td>
                          <td>
                            <a href="{{ route('satiw-form-page', ['id' => $n['id'],'type'=>$n['type'] ]) }}" class="btn btn-success">Сатыу</a>
                          </td>
                          <td>
                            <a href="{{ route('debt-form-page', ['id' => $n['id'],'type'=>$n['type'] ]) }}" class="btn btn-warning">Карзга бериу</a>
                          </td>
                        </tr>
                        @endforeach 
                      </tbody></table>
                    </div>
                  </div>
                      
                      
                      </div>
                      <div class="tab-pane fade" id="contact5" role="tabpanel" aria-labelledby="">
                      
                      <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-bordered table-md">
                        <tbody><tr>
                                                    <th>№</th>

                          <th>Аты</th>
                          <th>Для?</th>
                          <th>Количество</th>
                          <th>Цена</th>
                          <th>Сатыу</th>
                        </tr>
                        @php
                          $oth=1;
                        @endphp
                        @foreach($others as $o)
                        <tr>
                          <td>{{$oth++}}</td>
                          <td>{{$o['name']}}</td>
                          <td>{{$o['for']}}</td>
                          <td><b>{{$o['quantity']}}</b> дана</td>
                          <td><mark>{{number_format($o['price'])}} UZS</mark></td>
                          <td>
                            <a href="{{ route('satiw-form-page', ['id' => $o['id'],'type'=>$o['type'] ]) }}" class="btn btn-success">Сатыу</a>
                          </td>
                          <td>
                            <a href="{{ route('debt-form-page', ['id' => $o['id'],'type'=>$o['type'] ]) }}" class="btn btn-warning">Карзга бериу</a>
                          </td>
                        </tr>
                        @endforeach 
                      </tbody></table>
                    </div>
                  </div>
                   
                
                
                      </div>
                    </div>
                  </div>
                </div>
                @endif
@endsection