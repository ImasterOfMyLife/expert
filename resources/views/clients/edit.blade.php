@extends('app')

@section('content')
<h1>Редактировать данные клиента: {{ $client->secondname }} {{ $client->firstname }} {{ $client->thirdname }}</h1>
<hr>

<div class="col-sm-4">
{!! Form::model($client, ['method' => 'PATCH', 'action' => ['ClientsController@update', $client->id]]) !!}
@include('clients.form', ['submitButtonText' => 'Сохранить новые данные'])
{!! Form::close() !!}

@include('errors.list')
</div>
@stop
