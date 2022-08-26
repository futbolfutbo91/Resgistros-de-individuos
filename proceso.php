<?php

$Nombre = $_POST['nombre'];
$Apellido = $_POST['apellido'];
$Celular = $_POST['celular'];
$Pais = $_POST['pais'];
$Documento = $_POST['documento'];
$Idioma = $_POST['idioma'];
$Genero = $_POST['genero'];
$Habilidad = $_POST['tareas'];


$Datos = [$Apellido];

echo "Nombre: $Nombre <br/> Apellido: $Apellido <br/> Celular: $Celular <br/> Pais: $Pais <br/> Documento: $Documento <br/> Idioma: $Idioma <br/> Genero: $Genero <br/>";

foreach($Habilidad as $habilidad){
    echo "Habilidad: $habilidad";
    echo "<br/>";
}



?>