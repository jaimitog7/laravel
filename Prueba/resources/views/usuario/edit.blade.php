@extends('layouts.app')
@section('title','Usuario Edit')
@section('content')
@include('validar.request')
		{!!Form::model($user,['route'=>['usuario.update',$user],'method'=>'PUT'])!!}

@include('usuario.forms.reg_usr')

	{!!Form::submit('Actualizar',['class'=>'btn btn-primary btn-block'])!!}
	{!!Form::close()!!}



@endsection
