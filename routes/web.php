<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
	$this->get('/', 'AdminController@index')->name('admin.home');
	$this->get('listar', 'PropertyController@getAll');
	$this->get('cadastrar', 'PropertyController@cadastro');
	$this->post('cadastrar', 'PropertyController@store')->name('property.store');
	$this->post('deletar', 'PropertyController@delete')->name('admin.deletar');
	// $this->get('editar', 'PropertyController@atualizar');
	$this->post('editar', 'PropertyController@update')->name('admin.editar');
	$this->get('buscar', 'PropertyController@get')->name('admin.buscar');
	$this->get('/home', 'AdminController@index')->name('admin.home');
});
$this->get('/', 'Site\SiteController@index');
// $this->post('cadatro');
Auth::routes();

$this->get('/home', 'Admin\AdminController@index')->name('admin.home');
