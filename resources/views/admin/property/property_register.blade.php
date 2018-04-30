@extends('adminlte::page')

@section('title', 'Cadastrar')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="box">
    	<div class="box-header">
    		<h3>Cadastrar Imovel</h3>
    	</div>
    	<div class="box-body">
    		<form method="POST" action="{{ route('property.store') }}">
    			{!! csrf_field() !!}
    			<div class="form-group">
    				<input type="text" name="title" placeholder="Titulo">
    			</div>
    			<div class="form-group">
    				<input type="text" name="type" placeholder="Tipo">
    			</div>
    			<div class="form-group">
    				<input type="text" name="zip" placeholder="CEP">
    			</div>
    			<div class="form-group">
    				<input type="text" name="city" placeholder="Cidade">
    			</div>
    			<div class="form-group">
    				<input type="text" name="state" placeholder="Estado">
    			</div>
    			<div class="form-group">
    				<input type="text" name="district" placeholder="Bairro">
    			</div>
    			<div class="form-group">
    				<input type="text" name="number" placeholder="Numero">
    			</div>
    			<div class="form-group">
    				<input type="text" name="complement" placeholder="Complemento">
    			</div>
    			<div class="form-group">
    				<input type="text" name="price" placeholder="Preço">
    			</div>
    			<div class="form-group">
    				<input type="text" name="area" placeholder="Area">
    			</div>
    			<div class="form-group">
    				<input type="text" name="dorms" placeholder="Dormitorios">
    			</div>
    			<div class="form-group">
    				<input type="text" name="suite" placeholder="Suites">
    			</div>
    			<div class="form-group">
    				<input type="text" name="bathrooms" placeholder="Banheiros">
    			</div>
    			<div class="form-group">
    				<input type="text" name="rooms" placeholder="Salas">
    			</div>
    			<div class="form-group">
    				<input type="text" name="garage" placeholder="Garagens">
    			</div>
    			<div class="form-group">
    				<input type="text" name="description" placeholder="Descrição">
    			</div>
    			<div class="form-group">
    				<input type="text" name="image" placeholder="Imagens">
    			</div>

    			<div class="form-group">
    				<button type="submit">Cadastre</button>
    			</div>
    		</form>
    	</div>
@stop