@extends('app')

@section('content')
<h1>Редактирование дела № {{$case->id}}</h1>
<hr>

<div class="col-sm-4">
	{!! Form::open(['method' => 'PATCH', 'action' => ['CasesController@update', $case->id]]) !!}
<div class="form-group">
	{!! Form::label('cliFullName', 'Клиент:') !!}
	{!! Form::text('cliFullName', $case->client->secondname .' '.$case->client->firstname .' '. $case->client->thirdname, ['class' => 'form-control']) !!}
	<input type="hidden" name="client_id" value=" {{ $case->client->id}} " >
</div>



<div class="form-group">
	{!! Form::label('casetype_id', 'Тип дела:') !!}
	{!! Form::select('casetype_id', $casetypes, $case->casetype->id, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('status_id', 'Статус дела:') !!}
	{!! Form::select('status_id', $casestatuses, $case->status->id, ['class' => 'form-control']) !!}
</div>



<div class="form-group">
	{!! Form::label('check_date', 'Срок напоминания:') !!}
	<div class='input-group date' id='datetimepicker2'>
		{!! Form::input('text', 'check_date', $case->check_date, ['class' => 'form-control']) !!}
		<span class="input-group-addon">
			<span class="glyphicon glyphicon-calendar"></span>
		</span>
	</div>
</div>
<div class="form-group">
	{!! Form::label('comment', 'Комментарий:') !!}
	{!! Form::textarea('comment', $case->comment, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('Сохранить', ['class' => 'btn btn-primary form-control']) !!}
</div>
<div class="form-group">
	<a href="{{url('cases')}}" class="btn btn-primary form-control">Отмена</a>	
</div>

{!! Form::close() !!}

@include('errors.list')
</div>
@stop






