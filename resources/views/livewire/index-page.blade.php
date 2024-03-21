<div>
  <div class="row">
    <div class="col-xl-3 col-lg-6">
      <div class="card">
        <div class="card-body card-type-3">
          <div class="row">
            <div class="col">
              <h6 class="text-muted mb-0">Qarzi barlar sani</h6>
              <span class="font-weight-bold mb-0">450</span>
            </div>
            <div class="col-auto">
              <div class="card-circle l-bg-orange text-white">
                <i class="fas fa-book-open"></i>
              </div>
            </div>
          </div>
          <p class="mt-3 mb-0 text-muted text-sm">
            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
            <span class="text-nowrap">Since last month</span>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6">
      <div class="card">
        <div class="card-body card-type-3">
          <div class="row">
            <div class="col">
              <h6 class="text-muted mb-0">New Booking</h6>
              <span class="font-weight-bold mb-0">1,562</span>
            </div>
            <div class="col-auto">
              <div class="card-circle l-bg-cyan text-white">
                <i class="fas fa-briefcase"></i>
              </div>
            </div>
          </div>
          <p class="mt-3 mb-0 text-muted text-sm">
            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 7.8%</span>
            <span class="text-nowrap">Since last month</span>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6">
      <div class="card">
        <div class="card-body card-type-3">
          <div class="row">
            <div class="col">
              <h6 class="text-muted mb-0">Klientler sani</h6>
              <span class="font-weight-bold mb-0">7897</span>
            </div>
            <div class="col-auto">
              <div class="card-circle l-bg-green text-white">
                <i class="fas fa-phone"></i>
              </div>
            </div>
          </div>
          <p class="mt-3 mb-0 text-muted text-sm">
            <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 15%</span>
            <span class="text-nowrap">Since last month</span>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-6">
      <div class="card">
        <div class="card-body card-type-3">
          <div class="row">
            <div class="col">
              <h6 class="text-muted mb-0">Bugingi payda</h6>
              <span class="font-weight-bold mb-0">{{  number_format($payda) }} sum</span>
            </div>
            <div class="col-auto">
              <div class="card-circle l-bg-purple text-white">
                <i class="fas fa-dollar-sign"></i>
              </div>
            </div>
          </div>
          <p class="mt-3 mb-0 text-muted text-sm">
            <span class="text-success mr-2"><i class="fa fa-arrow-dup"></i> 5.4%</span>
            <span class="text-nowrap">Since last month</span>
          </p>
        </div>
      </div>
    </div>
  </div>
{{--  --}}
{{--  --}}
{{--  --}}
<div class="card">
  <div class="card-header">
    <h4></h4>
  </div>
  <div class="card-body">
    <ul class="nav nav-pills" id="myTab3" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true">Satilg'an zatlar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false">Qarizg'a berilgen zatlar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="contact-tab3" data-toggle="tab" href="#contact3" role="tab" aria-controls="contact" aria-selected="false">Bugingi rasxodlar</a>
      </li>
    </ul>
    <div class="tab-content" id="myTabContent2">
      <div class="tab-pane fade active show" id="home3" role="tabpanel" aria-labelledby="home-tab3">
        {{-- Satilg'an zatlar --}}
        <table class="table table-striped">
          <thead>
            <tr>
              <tr>
                <th scope="col">№</th>
                <th scope="col">Сатылган зат</th>
                <th scope="col">Сатыушы аты</th>
                <th scope="col">Категория</th>
                <th scope="col">Саны</th>
                <th scope="col">Толем тури</th>
                <th scope="col">Пулы</th>
                <th scope="col">Коментария</th>
                <th scope="col">Сане</th>
              </tr>
            </tr>
          </thead>
          <tbody>
            @php
        $a=1;
      @endphp
      @foreach ($table_1 as $v)
        
      <tr>
        <th scope="row">{{ $a++ }}</th>
        <td>{{ $v['name'] }}</td>
        <td>{{ $v['worker_name'] }}</td>
        <td>{{ $v['type'] }}</td>
        <td>{{ $v['count'] }} дана</td>
        <td>{{ $v['tolem'] }} </td>
        <td><mark>{{ number_format($v['pul'])}} UZS</mark></td>
        <td>@if ($v['comment'] == null) Joq   @else   {{ $v['comment'] }}     @endif </td>
        <td>{{ $v['created_at'] }}</td>
      </tr>
      @endforeach
          </tbody>
        </table>
        {{-- End of Satilg'an zatlar   --}}
      </div>
      <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
        {{-- Qarizg'a berilgen zatlar --}}
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">First</th>
              <th scope="col">Last</th>
              <th scope="col">Handle</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mark</td>
              <td>Otto</td>
              <td>@mdo</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Jacob</td>
              <td>Thornton</td>
              <td>@fat</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Larry</td>
              <td>the Bird</td>
              <td>@twitter</td>
            </tr>
          </tbody>
        </table>
        {{-- End of Qarizg'a berilgen zatlar --}}

      </div>
      <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
        <table class="table table-striped">
        {{-- Rasxod --}}

          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Неге?</th>
              <th scope="col">Канша?</th>
              <th scope="col">Кашан?</th>
            </tr>
          </thead>
          <tbody>
            @php
            $a = 1;
            @endphp
            @foreach ($table_3 as $v)
            <tr>
              <th scope="row">{{ $a++ }}</th>
              <td>{{ $v['name'] }}</td>
              <td><mark>{{number_format( $v['price'])}} UZS</mark></td>
              <td>{{ $v['created_at'] }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{-- End of Rasxod --}}

      </div>
    </div>
  </div>
</div>
</div>
