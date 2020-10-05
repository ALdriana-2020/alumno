<?php

// definirclase]

class conexion{

    function conectar(){
        $conexion=mysqli_connect("localhost","root","","sistema de informacion")
        or die("no se puedo conectar :: mysql Error ::" . mysql_Error());;

        return $conexion;
  
    }
}
?>