@extends('layouts.admin')
<?php 
$message = Session::get('message')
 ?>
 @if($message == 'store')
 	<div class="alert alert-success alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  Usuario creado Exitosamente ...
	</div>
 @endif
@section('content')
	
<table class="table">
	<thead>
		<th>Combre</th>
		<th>Correo</th>
		<th>Operaciones</th>
	</thead>
	@foreach($users as $user)
	<tbody>
		<td>{{$user->name}}</td>
		<td>{{$user->email}}</td>
		<td>Botones en Contrucciòn
		</td>
	</tbody>
	@endforeach
</table>





@stop()