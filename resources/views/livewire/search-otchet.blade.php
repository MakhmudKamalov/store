<div class="search_panel">
  <div>
      {{-- <input class="form-control" style="width: 25%" placeholder="Излеу....." type="search" name="" id=""> --}}

      <input wire:model.live="search" type="search"    class="form-control" style="width: 25%" placeholder="Излеу....." />
      @if (!empty($users))
      <table class="table">
        <thead>
          <tr>
            <th scope="col">№</th>
        <th scope="col">Товар</th>
        <th scope="col">Сатыушы</th>
        <th scope="col">Категория</th>
        <th scope="col">Марка</th>
        <th scope="col">Саны</th>
        <th scope="col">Толем тури</th>
        <th scope="col">Пулы</th>
        <th scope="col">Коментария</th>
        <th scope="col">Сане</th>
        <th scope="col">Возврат / Ошириу</th>

          </tr>
        </thead>
      <tbody>
        @php
          $a=1;
          @endphp
           @if (count($users) == 0)
           <tr>
             <td></td>
             <td></td>
             <td></td>
               <td style="font-size: 40px">Maglumat tabilmadi</td>
               <td></td>
               <td></td>
               <td></td>


           </tr>
           @else
        @foreach ($users as $v)
          
        <tr>
          <th scope="row">{{ $a++ }}</th>
          <td>{{ $v['name'] }}</td>
          <td>{{ $v['worker_name'] }}</td>
          <td>{{ $v['type'] }}</td>
          <td>{{ $v['for'] }}</td>
          <td>{{ $v['count'] }} дана</td>
          <td>{{ $v['tolem'] }} </td>
          <td><mark>{{ number_format($v['pul'])}} UZS</mark></td>
          <td>{{ $v['comment'] }} </td>
          <td>{{ $v['created_at'] }}</td>
          <td>
            <a href="{{ Route('tovar_vozvrat', ['id'=>$v['id']]) }}" class="btn btn-icon btn-primary"><i class="far fa-edit"></i></a>
            <a href="{{ Route('tovar_delete', ['id'=>$v['id']]) }}" class="btn btn-icon btn-danger"><i class="fas fa-times"></i></a>
          </td>
        </tr>
      </tbody>
        @endforeach
        @endif
        @endif

  </div>
</div>
