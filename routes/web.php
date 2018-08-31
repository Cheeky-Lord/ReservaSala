<?php

$this->resource('professor', 'ProfessorController');
$this->resource('curso', 'CursoController');
$this->resource('sala', 'SalaController');
$this->resource('equipamento', 'EquipamentoController');
$this->resource('reservar-sala', 'Reserva\ReservarSalaController');

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/reservar', 'HomeController@cadastrar')->name('cadastrar');