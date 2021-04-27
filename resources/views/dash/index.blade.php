@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <table class="table table-dark table-striped mt-4">
    	<thead>
    		<tr>
    			<th scope="col">Id</th>
    			<th scope="col">Usuario</th>
    			<th scope="col">Email</th>
    			<th scope="col">Nro Rifa</th>
    			<th scope="col">Estado</th>
    			<th scope="col">Acciones</th>
    		</tr>
    	</thead>
    	<tbody>
    		<tr>
    			<td> id </td>
    			<td> usuario </td>
    			<td> email </td>
    			<td> Nro </td>
    			<td><b class="text-red">a pagar</b>//<b class="text-green">pagado</b></td>
    			<td>
    				<a class="btn btn-info" href="">Editar</a>
    				<button class="btn btn-danger">Borrar</button>
    			</td>
    		</tr>
    	</tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop