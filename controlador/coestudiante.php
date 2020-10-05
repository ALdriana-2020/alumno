<?php
$Cedula_estudiante =$_GET['Cedula_estudiante'];
$Nombre_estudiante =$_GET['Nombre_estudiante'];
$Celular_estudiante =$_GET['Celular_estudiante'];
$Correo_estudiante =$_GET['Correo_estudiante'];
$Fecha_estudiante =$_GET['Fecha_estudiante'];
$Boton =$_GET['Boton'];

//consulta la clase
require_once ("../clases/clestudiante.php");
//condicionales
switch($Boton){

    case"Enviar";

    $objeto = new estudiante;
    $ejecutar = $objeto -> insertar_estudiante($Cedula_estudiante,$Nombre_estudiante,$Correo_estudiante,$Celular_estudiante,$Fecha_estudiante);
    header("location:../vistas/estudiante.php ?$msg" .$ejecutar);

break;

}





?>