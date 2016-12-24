@extends('app')

@section('content')
<h1>Текущие дела</h1>
<div class="row">
	<div class="col-sm-4">
		<a href="{{action('CasesController@create')}}" class="btn btn-primary form-control">Создать новое дело</a>	
	</div>
	<div class="col-sm-4">
		<a href="{{url('/')}}" class="btn btn-primary form-control">Главная</a>	
	</div>
</div>




	<div class="table-responsive">
	<table class="table">
		<thead>
			<tr>
				<th>#</th>	
				<th>Ф.И.О клиента</th>
				<th>Телефон клиента</th>
				<th>Тип дела</th>
				<th>Статус дела</th>		
				<th>Последнее изменение</th>
				<th>Срок уведомления</th>
			</tr>	
		</thead>
		<tbody>
			@foreach ($cases as $case)
			<tr>
				<td><a href="{{ action('CasesController@edit', $case->id) }}">{{ $case->id }}</a></td>
				<td class="left">{{ $case->client->secondname }} {{ $case->client->firstname }} {{ $case->client->thirdname }}</td>
				<td>{{ $case->client->phone }}</td>
				<td>{{ $case->casetype->type }}</td>
				<td>{{ $case->status->status }}</td>

				<td class="updated_at">{{ $case->updated_at->format('d-m-Y') }}</td>
				@if ($case->check_date->isPast())
					<td class="cell_red">{{ $case->check_date->format('d-m-Y') }}</td>
				@else
					<td>{{ $case->check_date->format('d-m-Y') }}</td>	
				@endif
			</tr>
			@endforeach	
		</tbody>	
	</table>
	</div>
@stop
