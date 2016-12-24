@extends('app')

@section('content')
	<h1>Клиент № {{ $client->id }}</h1>
	<p>
		<b>ФИО:</b>
		......................
		{{$client->secondname}} {{$client->firstname}} {{$client->thirdname}}
	</p>
	<p>
		<b>Телефон:</b>
		......................
		{{$client->phone}}
	</p>
@stop
