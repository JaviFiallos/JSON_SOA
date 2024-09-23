<?php

$objeto = new stdClass();
$objeto->nombre="Juan";
$objeto->lastName="Duran";
var_dump($objeto);
echo ('<br>');
echo($objeto->nombre);  
echo ('<br>');
//array vector
$colores = array("Azul", "Amarillo","Rojo");
print_r($colores);
echo ('<br>');

//array asociativo clave valor

$asociar = array("nombre"=>"Carlos","aepllido"=>"amaguaña");
print_r($asociar["aepllido"]);
echo ('<br>');

//lista
$lista = '{"nombre":"Carlos","aepllido":"Gonzavia"}';
print_r($lista);
//echo(gettype($lista));
echo ('<br>');


$mijson = json_encode($asociar);
print_r(gettype($mijson));
echo ('<br>');

$miphp = json_decode($lista);
print_r($miphp);
echo ('<br>');
print_r(gettype($miphp));
echo ('<br>');
print_r($miphp->nombre);

