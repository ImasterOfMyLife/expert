@extends('app')

@section('content')
<h1>Создать новое дело</h1>
<hr>

<div class="col-sm-4">
{!! Form::open(['url' => 'cases']) !!}

<div class="form-group">
	{!! Form::label('cliFullName', 'ФИО:') !!}
	{!! Form::text('cliFullName', null, ['class' => 'form-control']) !!}
	<input type="hidden" name="client_id">
	<input type="hidden" name="status_id" value="1">
</div>



<div class="form-group">
	{!! Form::label('casetype_id', 'Тип дела:') !!}
	{!! Form::select('casetype_id', $casetypes, null, ['class' => 'form-control' ]) !!}
<!--	<input type="hidden" name="casetype_id">-->
</div>



<div class="form-group">
	{!! Form::label('check_date', 'Срок напоминания:') !!}
	<div class='input-group date' id='datetimepicker2'>
		{!! Form::input('text', 'check_date', null, ['class' => 'form-control']) !!}
		<span class="input-group-addon">
			<span class="glyphicon glyphicon-calendar"></span>
		</span>
	</div>
</div>
<div class="form-group">
	{!! Form::label('comment', 'Комментарий:') !!}
	{!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
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






