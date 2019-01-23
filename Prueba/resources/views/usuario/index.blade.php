@extends('layouts.app')
@section('title','Usuario Index')
@section('content')
  <h1>Listado Usuarios</h1>
<table class="table table-dark text-center">

  <thead>
    <th>Id</th>
    <th>Nombres</th>
    <th>Apellido Paterno</th>
    <th>Apellido Materno</th>
    <th>Rut</th>
    <th>E-mail</th>
    <th>Telefono</th>
    <th>Fecha Nacimiento</th>
    <th>Estado</th>
    <th>Editar</th>
    <th>Eliminar</th>

  </thead>

  @foreach($users as $user)

  <tbody>
    <td>{{$user->id}}</td>
    <td>{{$user->nombres}}</td>
    <td>{{$user->apellido_paterno}}</td>
    <td>{{$user->apellido_materno}}</td>
    <td>{{$user->rut}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->telefono}}</td>
    <td>{{$user->fecha_nacimiento}}</td>

    @if($user->status == 1 )
          <td class="badge badge-pill badge-warning mt-2">{{$user->status="Habilitado"}}</td>
          @else
<td class="badge badge-pill badge-danger mt-2">{{$user->status="Deshabilitado"}}</td>
          @endif
    <td>{!!link_to_route('usuario.edit',"", ['usuario' => $user->id], ['class'=>'btn btn-primary far fa-edit'])!!}
    </td>


    <td>{!!Form::open(['route'=>['usuario.destroy',$user],'method'=>'DELETE'])!!}
  	   {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-block'] )  }} </td>

  </tbody>
  </tbody>
@endforeach
</table>
{!!$users->render()!!}
@stop
