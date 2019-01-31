<?php

$datos=$_POST;
$id=$datos['id'];
$nombre=$datos['nombre'];
$materia=$datos['materia'];
$nota=$datos['nota'];
    
$saludos="¡Qué tal! ".$id." "."Eres ".$nombre." tu nota es ".$nota."." ;

echo $saludos;

