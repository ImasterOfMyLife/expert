@extends('app')

@section('content')
<h1>Клиенты</h1>
<div class="row">
	<div class="col-sm-4">
		<a href="{{action('ClientsController@create')}}" class="btn btn-primary form-control">Создать нового клиента</a>	
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
				<th>Фамилия</th>
				<th>Имя</th>
				<th>Отчество</th>		
				<th>Телефон</th>
			</tr>	
		</thead>
		<tbody>
			@foreach ($clients as $client)
			<tr>
				<td><a href="{{ action('ClientsController@edit', $client->id) }}">{{ $client->id }}</a></td>
				<td>{{ $client->secondname }}</td>
				<td>{{ $client->firstname }}</td>
				<td>{{ $client->thirdname }}</td>
				<td>{{ $client->phone }}</td>
			</tr>
			@endforeach	
		</tbody>	
	</table>
	</div>
@stop
