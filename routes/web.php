<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->post('alunos/', 'Alunos\CriarAlunoController@executar');
$router->put('alunos/{id}', 'Alunos\AlterarAlunoController@executar');
$router->get('alunos/{id}', 'Alunos\VerAlunoController@executar');
$router->get('alunos/', 'Alunos\ListarAlunosController@executar');
