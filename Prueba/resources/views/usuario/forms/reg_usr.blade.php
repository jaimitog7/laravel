<div class="form-group">
  {!!Form::label('Nombres:')!!}
  {!!Form::text('nombres',null,['class'=>'form-control','placeholder'=>'Ingrese su Nombre'])!!}
</div>

<div class="form-group">
   {!!Form::label('Apellido_paterno:')!!}
   {!!Form::text('apellido_paterno',null,['class'=>'form-control','placeholder'=>'Ingresa apellido paterno'])!!}
</div>

<div class="form-group">
  {!!Form::label('Apellido_materno:')!!}
  {!!Form::text('apellido_materno',null,['class'=>'form-control','placeholder'=>'Ingresa Apellido Materno'])!!}
</div>

<div class="form-group">
 {!!Form::label('Rut:')!!}
 {!!Form::text('rut',null,['class'=>'form-control','placeholder'=>'Ingresa rut'])!!}
</div>

<div class="form-group">
  {!!Form::label('Telefono:')!!}
  {!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Ingresa el Telefono'])!!}
</div>

 <div class="form-group">
   {!!Form::label('email:')!!}
   {!!Form::email('email',null,['class'=>'form-control','placeholder'=>'Ingresa E-mail'])!!}
 </div>

 <div class="form-group">
   {!!Form::label('estado:')!!}
   {!!Form::text('status',null,['class'=>'form-control','placeholder'=>'Habilitado =1 / Deshabilitado = 0'])!!}
 </div>

 <div class="form-group">
   {!!Form::label('Fecha Nacimiento:')!!}
   {!!Form::text('fecha_nacimiento',null,['class'=>'form-control','placeholder'=>'dd-MM-aaaa'])!!}
 </div>
