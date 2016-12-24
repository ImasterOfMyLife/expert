@extends('app')

@section('content')
<h1>Добавить нового клиента</h1>
<hr>

<div class="col-sm-4">
{!! Form::open(['url' => 'clients']) !!}

@include('clients.form',['submitButtonText' => 'Добавить нового клиента'])

{!! Form::close() !!}

@include('errors.list')
</div>
@stop




