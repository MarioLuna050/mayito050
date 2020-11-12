<?php

use Illuminate\Support\Facades\Route;



Route::get('/mayito', 'EstructurasDeControl@archivo');


Route::get('/trapecio/{bmenor?}/{bmayor?}/{altura?}', [
    'uses' => 'EstructurasDeControl@secuencial1',
    'as'=> 'secuencial1'
]);
Route::get('/apotema/{lado?}', [
    'uses' => 'EstructurasDeControl@secuencial2',
    'as'=> 'secuencial2'
]);
Route::get('/cono/{h?}/{r?}', [
    'uses' => 'EstructurasDeControl@secuencial3',
    'as'=> 'secuencial3'
]);
Route::get('/triangulo/{base?}/{alt?}',[
    'uses' =>  'EstructurasDeControl@secuencial4',
    'as'=> 'secuencial4'
]);
Route::get('/circunferencia/{r?}', [
    'uses' => 'EstructurasDeControl@secuencial5',
    'as'=> 'secuencial5'
]);


Route::get('/votar', [
    'uses' => 'EstructurasDeControl@decision1',
    'as'=> 'decision1'
]);
Route::get('/pagoph', [
    'uses' => 'EstructurasDeControl@decision2',
    'as'=> 'decision2'
]);
Route::get('/14febrero',  [
    'uses' => 'EstructurasDeControl@decision3',
    'as'=> 'decision3'
]);
Route::get('/estacionamiento', [
    'uses' => 'EstructurasDeControl@decision4',
    'as'=> 'decision4'
]);
Route::get('/calif', [
    'uses' => 'EstructurasDeControl@decision5',
    'as'=> 'decision5'
]);


Route::get('/salario','EstructurasDeControl@ciclos1');
Route::get('/ncantidades', 'EstructurasDeControl@ciclos2');
Route::get('/billetes','EstructurasDeControl@ciclos3');
Route::get('/nalumnos', 'EstructurasDeControl@ciclos4');
Route::get('/tabla', 'EstructurasDeControl@ciclos5');
