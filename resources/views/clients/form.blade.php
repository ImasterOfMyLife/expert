<div class="form-group">
	{!! Form::label('secondname', 'Фамилия:') !!}
	{!! Form::text('secondname', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('firstname', 'Имя:') !!}
	{!! Form::text('firstname', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('secondname', 'Отчество:') !!}
	{!! Form::text('thirdname', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('phone', 'Телефон:') !!}
	{!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Номер телефона в формате + 7 XXX XXX XX XX']) !!}
</div>
<div class="form-group">
	{!! Form::label('comment', 'Комментарий:') !!}
	{!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
<div class="form-group">
	<a href="{{url('clients')}}" class="btn btn-primary form-control">Отмена</a>	
</div>