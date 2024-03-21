@extends('layouts.layout')

@section('content')
<div class="card">
  <div class="padding-20">
    <ul class="nav nav-tabs" id="myTab2" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab" aria-selected="true">Profilim</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Profildi Ozgertiw</a>
      </li>
    </ul>
    <div class="tab-content tab-bordered" id="myTab3Content">
      <div class="tab-pane fade active show" id="about" role="tabpanel" aria-labelledby="home-tab2">
        <div class="row">
          <div class="col-md-3 col-6 b-r">
            <strong>Ati:</strong>
            <br>
            <i style="color:blue">{{ Auth::user()->name }}</i>
          </div>
          <div class="col-md-3 col-6 b-r">
            <strong>Familya:</strong>
            <br>
            <i style="color:blue">{{ Auth::user()->surname }}</i>
          </div>
          <div class="col-md-3 col-6 b-r">
            <strong>Telefon:</strong>
            <br>
            <i style="color:blue">{{ Auth::user()->phone }}</i>
          </div>
          <div class="col-md-3 col-6">
            <strong>Login:</strong>
            <br>
            <i style="color:blue">{{ Auth::user()->email }}</i>
          </div>
          <div class="col-md-3 col-6">
            <strong>Password:</strong>
            <br>
          </div>
        </div>
        
        </ul>
      </div>
      <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
        <form action="{{ route('edit-profile') }}" method="post" class="needs-validation">
          @csrf
          <input type="hidden" name="id" value="{{ Auth::user()->id }}">
          <div class="card-header">
            <h4>Edit Profile</h4>
          </div>
          <div class="card-body">
              <div class="row">
                 <div class="col">
                          <div class="form-group col-md-6 col-12">
                          <label>Ati:</label>
                          <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                          
                        </div>
                 </div>
                 <div class="col">
                          <div class="form-group col-md-6 col-12">
                          <label>Familya:</label>
                          <input type="text" name="surname" class="form-control" value="{{ auth::user()->surname }}">
                          
                        </div>
                 </div>
                 <div class="col">
                         <div class="form-group col-md-6 col-12">
                          <label>phone</label>
                          <input type="text" name="phone" class="form-control" value="{{ auth::user()->phone }}">
                          
                        </div>
                 </div>
              </div>
              <div class="row">
                 <div class="col">
                        <div class="form-group col-md-6 col-12">
                          <label>Login:</label>
                          <input type="text" name="login" class="form-control" value="{{ auth::user()->email }}">
                          
                        </div>
                 </div>
                 <div class="col">
                        <div class="form-group col-md-6 col-12">
                          <label>Password</label>
                          <input type="text" name="password" class="form-control" value="">
                          
                        </div>
                 </div>
                 <div class="col"></div>
              </div>
              
           
            
          </div>
          <div class="card-footer text-right">
            <button class="btn btn-primary" type="submit">Saqlaw</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</section>


@endsection