@extends('layouts.layout')

@section('content')

<div class="card">
                  <div class="card-header">
                    <h4>Базага тазадан косыу</h4>
                  </div>
                  {{-- <div class="card-body"> --}}
                    <div class="card-body">
                      <form action="{{route('addchexol')}}" method="post">
                        @csrf
    <div class="row">
      <div class="col">
        <div class="form-group">
          <label>Аты</label>
          <input type="text" name="name" required placeholder=""  value="{{ old('name') }}"  class="form-control  @error('name') is-invalid @enderror">
          @error('name')
          {{ $message }}
          @enderror
        </div>
      </div>
      <div class="col">
        <div class="form-group">

        <label for="">Заттын тури</label>
<select name="type" required id="" class="form-control">
  @if(old('type'))
@if (old('type') == 'chexol')
<option value="chexol">Chexol</option>
<option value="adapter">Adapter</option>
<option value="naushnik">Naushnik</option>
<option value="shnur">Shnur</option>
<option value="basqa">Basqa</option>
@elseif (old('type') == 'adapter')
<option value="adapter">Adapter</option>
<option value="chexol">Chexol</option>
<option value="naushnik">Naushnik</option>
<option value="shnur">Shnur</option>
<option value="basqa">Basqa</option>
@elseif (old('type') == 'naushnik')
<option value="naushnik">Naushnik</option>
<option value="chexol">Chexol</option>
<option value="adapter">Adapter</option>
<option value="shnur">Shnur</option>
<option value="basqa">Basqa</option>
@elseif (old('type') == 'shnur')
<option value="shnur">Shnur</option>
<option value="chexol">Chexol</option>
<option value="naushnik">Naushnik</option>
<option value="adapter">Adapter</option>
<option value="basqa">Basqa</option>
@else
<option value="basqa">Basqa</option>
<option value="chexol">Chexol</option>
<option value="shnur">Shnur</option>
<option value="naushnik">Naushnik</option>
<option value="adapter">Adapter</option>
@endif

  @else
  <option value="">...</option>
  <option value="chexol">Chexol</option>
  <option value="adapter">Adapter</option>
  <option value="naushnik">Naushnik</option>
  <option value="shnur">Shnur</option>
  <option value="basqa">Basqa</option>
  @endif
</select>
</div>

      </div>
    </div>
            <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Количество</label>
                <input type="number" name="quantity" required value="{{ old('quantity') }}"  class="form-control  @error('quantity') is-invalid @enderror">
                @error('quantity')
                {{ $message }}
                @enderror
              </div>
            </div>
            <div class="col">
              <div class="form-group">
                <label>Для?</label>
                <select class="form-control" name="for" required>
                  @if(old('for'))
@if (old('for') == 'iPhone')
<option>iPhone</option>
<option>Samsung</option>
<option>Universal</option>
<option>Basqa</option>
@elseif (old('for') == 'Samsung')
<option>Samsung</option>
<option>iPhone</option>
<option>Universal</option>
<option>Basqa</option>
@elseif (old('for') == 'Universal')
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
                  @else
                  <option value="">---</option>
                  <option>iPhone</option>
                  <option>Samsung</option>
                  <option>Universal</option>
                  <option>Basqa</option>
                  @endif
                </select>
              </div>
              </div>  
            </div>         

                    <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label>Цена</label>
                        <input type="number" name="price" required  value="{{ old('price') }}"  class="form-control  @error('price') is-invalid @enderror">
                        @error('price')
                        {{ $message }}
                        @enderror
                      </div>
                    </div>
                    <div class="col">
                      </div>  
                    </div>    
                       
                    <div class="card-footer text-center">
                      <input type="submit" class="btn btn-primary mr-1" value="Саклау">
                    </form>
                  </div>
                       
                    
{{--  --}}

<div class="swal-overlay @if (session('tovar-added'))
swal-overlay--show-modal   
@endif" tabindex="-1">
  <div class="swal-modal" role="dialog" aria-modal="true"><div class="swal-icon swal-icon--success">
    <span class="swal-icon--success__line swal-icon--success__line--long"></span>
    <span class="swal-icon--success__line swal-icon--success__line--tip"></span>

    <div class="swal-icon--success__ring"></div>
    <div class="swal-icon--success__hide-corners"></div>
  </div><div class="swal-title" style="">Товар  косылды</div><div class="swal-text" style=""></div><div class="swal-footer"><div class="swal-button-container">

    <button class="swal-button swal-button--confirm"  ><a href=" " style="text-decoration: none; color:white">OK</a></button>

    <div class="swal-button__loader">
      <div></div>
      <div></div>
      <div></div>
    </div>

  </div></div></div></div>
{{--  --}}
                </div>
                  </div>
                    
                </div>







{{-- 

                    <ul class="nav nav-pills" id="myTab3" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true">Чехол</a>
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
                    <div class="tab-content" id="myTabContent2">
                      <div class="tab-pane fade active show" id="home3" role="tabpanel" aria-labelledby="home-tab3"> 
                        


                  <div class="card-body">
                  <form action="{{route('addchexol')}}" method="post">
                    @csrf

                    <div class="form-group">
                      <label>Аты</label>
                      <input type="text" name="name" required placeholder=""  value="{{ old('name') }}"  class="form-control  @error('name') is-invalid @enderror">
                      @error('name')
                      {{ $message }}
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Для?</label>
                      <select class="form-control" name="for" required>
                        <option value="">---</option>
                        <option>iPhone</option>
                        <option>Samsung</option>
                        <option>Universal</option>
                        <option>Basqa</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Количество</label>
                      <input type="number" name="quantity" required value="{{ old('quantity') }}"  class="form-control  @error('quantity') is-invalid @enderror">
                      @error('quantity')
                      {{ $message }}
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Цена</label>
                      <input type="number" name="price" requiredvalue="{{ old('price') }}"  class="form-control  @error('price') is-invalid @enderror">
                      @error('price')
                      {{ $message }}
                      @enderror
                    </div>
                  </div>

                  <div class="card-footer text-center">
                    <input type="submit" class="btn btn-primary mr-1" value="Саклау">
                  </form>
                </div>
                
                

                      </div>
                      <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">


                      <div class="card-body">
                  <form action="{{route('addadapter')}}" method="post">
                    @csrf

                    <div class="form-group">
                      <label>Аты</label>
                      <input type="text" name="name" required placeholder=""  value="{{ old('name') }}"  class="form-control  @error('name') is-invalid @enderror">
                      @error('name')
                      {{ $message }}
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Для?</label>
                      <select class="form-control" name="for" required>
                        <option value="">---</option>
                        <option>iPhone</option>
                        <option>Samsung</option>
                        <option>Universal</option>
                        <option>Basqa</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Количество</label>
                      <input type="number" name="quantity" required value="{{ old('quantity') }}"  class="form-control  @error('quantity') is-invalid @enderror">
                      @error('quantity')
                      {{ $message }}
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Цена</label>
                      <input type="number" name="price" requiredvalue="{{ old('price') }}"  class="form-control  @error('price') is-invalid @enderror">
                      @error('price')
                      {{ $message }}
                      @enderror
                    </div>
                  </div>

                  <div class="card-footer text-center">
                    <input type="submit" class="btn btn-primary mr-1" value="Саклау">
                  </form>
                </div>
                        


                      </div>
                      <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="">

                      
                      <div class="card-body">
                  <form action="{{route('addshnur')}}" method="post">
                    @csrf

                    <div class="form-group">
                      <label>Аты</label>
                      <input type="text" name="name" required placeholder=""  value="{{ old('name') }}"  class="form-control  @error('name') is-invalid @enderror">
                      @error('name')
                      {{ $message }}
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Для?</label>
                      <select class="form-control" name="for" required>
                        <option value="">---</option>
                        <option>iPhone</option>
                        <option>Samsung</option>
                        <option>Universal</option>
                        <option>Basqa</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Количество</label>
                      <input type="number" name="quantity" required value="{{ old('quantity') }}"  class="form-control  @error('quantity') is-invalid @enderror">
                      @error('quantity')
                      {{ $message }}
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Цена</label>
                      <input type="number" name="price" requiredvalue="{{ old('price') }}"  class="form-control  @error('price') is-invalid @enderror">
                      @error('price')
                      {{ $message }}
                      @enderror
                    </div>
                  </div>

                  <div class="card-footer text-center">
                    <input type="submit" class="btn btn-primary mr-1" value="Саклау">
                  </form>
                </div>


                      </div>
                      <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="">


                      <div class="card-body">
                  <form action="{{route('addnaushnik')}}" method="post">
                    @csrf

                    <div class="form-group">
                      <label>Аты</label>
                      <input type="text" name="name" required placeholder=""  value="{{ old('name') }}"  class="form-control  @error('name') is-invalid @enderror">
                      @error('name')
                      {{ $message }}
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Для?</label>
                      <select class="form-control" name="for" required>
                        <option value="">---</option>
                        <option>iPhone</option>
                        <option>Samsung</option>
                        <option>Universal</option>
                        <option>Basqa</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Количество</label>
                      <input type="number" name="quantity" required value="{{ old('quantity') }}"  class="form-control  @error('quantity') is-invalid @enderror">
                      @error('quantity')
                      {{ $message }}
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Цена</label>
                      <input type="number" name="price" requiredvalue="{{ old('price') }}"  class="form-control  @error('price') is-invalid @enderror">
                      @error('price')
                      {{ $message }}
                      @enderror
                    </div>
                  </div>

                  <div class="card-footer text-center">
                    <input type="submit" class="btn btn-primary mr-1" value="Саклау">
                  </form>
                </div>
                      
                      
                      </div>
                      <div class="tab-pane fade" id="contact5" role="tabpanel" aria-labelledby="">
                      
                      
                      <div class="card-body">
                  <form action="{{route('addothers')}}" method="post">
                    @csrf

                    <div class="form-group">
                      <label>Аты</label>
                      <input type="text" name="name" required placeholder=""  value="{{ old('name') }}"  class="form-control  @error('name') is-invalid @enderror">
                      @error('name')
                      {{ $message }}
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Для?</label>
                      <select class="form-control" name="for" required>
                        <option value="">---</option>
                        <option>iPhone</option>
                        <option>Samsung</option>
                        <option>Universal</option>
                        <option>Basqa</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Количество</label>
                      <input type="number" name="quantity" required value="{{ old('quantity') }}"  class="form-control  @error('quantity') is-invalid @enderror">
                      @error('quantity')
                      {{ $message }}
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Цена</label>
                      <input type="number" name="price" requiredvalue="{{ old('price') }}"  class="form-control  @error('price') is-invalid @enderror">
                      @error('price')
                      {{ $message }}
                      @enderror
                    </div>
                  </div>

                  <div class="card-footer text-center">
                    <input type="submit" class="btn btn-primary mr-1" value="Саклау">
                  </form>
                </div>
                
                

                      </div>
                    </div>
                  </div>
                </div> --}}

@endsection