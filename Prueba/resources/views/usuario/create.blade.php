
@extends('layouts.app')
@section('title','Usuario Create')
@section('content')
  <h1>Crear Usuarios</h1>
  @include('validar.request')
    {!!Form::open(['route'=>'usuario.store','method'=>'POST'])!!}
  @include('usuario.forms.reg_usr')
    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
@stop
