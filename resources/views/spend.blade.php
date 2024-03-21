@extends('layouts.layout')

@section('content')

<div class="card">
                  <div class="card-header">
                    <h4>Расход косыу</h4>
                    <form action="{{ Route('addspend') }}" method="post">
                        @csrf
                  </div>
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="text">Расход</label>
                        <input type="text" class="form-control" name="name" id="text" placeholder="не затка сарпланды?">
                      </div>                      
                    </div>
                    <div class="form-group">
                      <label for="number">Канша?</label>
                      <input type="number" class="form-control"name="price" id="number" placeholder="канша сарпланды?">
                    </div>                   
                  </div>
                  <div class="card-footer">
                    <button class="btn btn-primary">Саклау</button>
                  </div>
                  </form>
                </div>
@endsection