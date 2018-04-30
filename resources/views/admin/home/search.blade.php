@extends('adminlte::page')

@section('title', 'Cadastrar')

@section('content_header')
@stop

@section('content')
    <table id="table" class="display" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>Codigo</th>
                                                        <th>Titulo</th>
                                                        <th>Tipo</th>
                                                        <th>Preço</th>
                                                        <th>Area do Imovel</th>
                                                        <th>Dormitorios</th>
                                                        <th>Suites</th>
                                                        <th>Banheiros</th>
                                                        <th>Salas</th>
                                                        <th>Garagem</th>
                                                        <th>Descrição</th>
                                                        <th>CEP</th>
                                                        <th>Cidade</th>
                                                        <th>Estado</th>
                                                        <th>Bairro</th>
                                                        <th>Numero</th>
                                                        <th>Complemento</th>
                                                        <th></th>
                                                        
                                                        <!-- <th class="hidden">Pedido</th> -->
                                                    </tr>
                                                </thead>
                                                <tbody>                                                   
                                                        <tr>
                                                            <td>
                                                                {{$properties->id}}
                                                            </td>
                                                            <td>
                                                                {{$properties->title}}
                                                            </td>
                                                            <td>
                                                                {{$properties->type}}
                                                            </td>
                                                            <td>
                                                                {{$properties->price}}
                                                            </td>
                                                            <td>
                                                                {{$properties->area}}
                                                            </td>
                                                            <td>
                                                                {{$properties->dorms}}
                                                            </td>
                                                            <td>
                                                                {{$properties->suite}}
                                                            </td>
                                                            <td>
                                                                {{$properties->bathrooms}}
                                                            </td>
                                                            <td>
                                                                {{$properties->rooms}}
                                                            </td>
                                                            <td>
                                                                {{$properties->garage}}
                                                            </td>
                                                           <td>
                                                               {{$properties->description}}
                                                           </td>
                                                           <td>
                                                                {{$properties->zip}}
                                                            </td>
                                                            <td>
                                                                {{$properties->city}}
                                                            </td>
                                                            <td>
                                                                {{$properties->state}}
                                                            </td>
                                                            <td>
                                                                {{$properties->district}}
                                                            </td>
                                                            <td>
                                                                {{$properties->number}}
                                                            </td>
                                                            <td>
                                                                {{$properties->complement}}
                                                            </td>
                                                           <td>
                                                           	<form action="{{ route('admin.editar') }}" method="POST">
                                                           		<input type="hidden" name="id" value="{{ $properties->id }}">                                  
                                                           		{!!csrf_field()!!}
                                                           		<button type="button" data-toggle="modal" data-target="#myModal">Editar</button>
                                                           	</form>
                                                           </td>
                                                           <td>
                                                            <form action="{{ route('admin.deletar') }}" method="POST">
                                                                <input type="hidden" name="id" value="{{ $properties->id }}">
                                                                {!!csrf_field()!!}
                                                                <button type="submit">Deletar</button>
                                                            </form>
                                                           </td>
                                                           
                                                        </tr>

                                                        <div id="myModal" class="modal fade" role="dialog">
                                              <div class="modal-dialog">

                                                <!-- Modal content-->
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Modal Header</h4>
                                                  </div>
                                                  <div class="modal-body">
                                                    <div class="box-body">
                                                            <form method="POST" action="{{ route('admin.editar') }}">
                                                                {!! csrf_field() !!}
                                                                    <div class="form-group">
                                                                    <input type="hidden" name="id" value="{{ $properties->id }}">
                                                                </div>                
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
                                                                    <button type="submit">Cadastre</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                  </div>
                                                  <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                  </div>
                                                </div>

                                              </div>
                                            </div>
                                                    
                                                </tbody>
                                            </table> 
@stop