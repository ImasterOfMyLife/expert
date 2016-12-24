@extends('app')
@section('content')
    <div class="main-wrap">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <a href="{{ action('ClientsController@index') }}" class="btn btn-primary form-control main-butons">
                    <span><i class="fa fa-user-circle-o" aria-hidden="true"></i></span>Клиенты</a>
                </div>
                <div class="col-sm-6">
                    <a href="{{ action('CasesController@index') }}" class="btn btn-primary form-control main-butons">
                    <span><i class="fa fa-address-card" aria-hidden="true"></i></span>Дела</a>
                </div>
            </div>
        </div>
    </div>
@stop