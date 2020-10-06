<?php
// <!--clase -->
//definicion de las clases
require_once("clconexion.php");
class estudiante
{

    var $Cedula_estudiante;
    var $Nombre_estudiante;
    var $Correo_estudiante;
    var $Celular_estudiante;
    var $Fecha_estudiante;

    // Creacion de constructor
    function constructor($pCedula_estudiante, $pNombre_estudiante, $pCorreo_estudiante, $pCelular_estudiante, $pFecha_estudiante)
    {
        $this->$Cedula_estudiante = $pCedula_estudiante;
        $this->$Nombre_estudiante = $pNombre_estudiante;
        $this->$Correo_estudiante = $pCorreo_estudiante;
        $this->$Celular_estudiante = $pCelular_estudiante;
        $this->$Fecha_estudiante = $pFecha_estudiante;
    }
    //metodos del diagram de clases
    function insertar_estudiante($pCedula_estudiante, $pNombre_estudiante, $pCorreo_estudiante, $pCelular_estudiante, $pFecha_estudiante)
    {

        $obj = new conexion;
        $conex = $obj->conectar();
        $sql = "INSERT INTO `tb_estudiante` (`Cedula_estudiante`, `Nombre_estudiante`, `Correo_estudiante`, `Celular_estudiante`, `Fecha_estudiante`) VALUES ('$pCedula_estudiante', '$pNombre_estudiante', '$pCorreo_estudiante', '$pCelular_estudiante', '$pFecha_estudiante');";
        $ejecutar = mysqli_query($conex, $sql);
        return $ejecutar;

        if ($ejecutar) {
            $msj = "Registro de forma correcta";
            return $msj;
        } else {
            echo "has tenido el siguiente error ; <br /> " . mysqli_error();
        }
    }
}
