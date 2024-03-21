<div class="search_panel">
    <div>
        <input wire:model.live="search" type="search" class="form-control" style="width: 25%" placeholder="Излеу....." />
        
        @if (!empty($products))
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Аты</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Для</th>
                        <th scope="col">Количество</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Сатыу</th>
                    </tr>
                </thead>
                <tbody>
                    @php $a = 1; @endphp
                    @if (count($products) == 0)
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

                    @foreach ($products as $v)
                        <tr>
                            <th scope="row">{{ $a++ }}</th>
                            <td>{{ $v->name }}</td>
                            <td>{{ $v->type }}</td>
                            <td>{{ $v->for }}</td>
                            <td><b>{{ $v->quantity }}</b> дана</td>
                            <td><mark>{{ number_format($v->price) }} UZS</mark></td>
                            <td>
                                <a href="{{ route('satiw-form-page', ['id' => $v->id, 'type' => $v->type]) }}" class="btn btn-success">Сатыу</a>
                            </td>
                        </tr>
                    @endforeach
                    @endif

                </tbody>
            </table>
        @endif
    </div>
</div>
