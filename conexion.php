<?php
function conectar()
{
$ser = "localhost";
$user ="root";
$pass = "";
$db = "bdcrudimg";
$oCon = mysqli_connect($ser,$user,$pass,$db);
if(!$oCon)
    {
        die("Conexion fallida".mysqli_connect_errno());
    }
    else
    {
        echo("Conexion Exitosa <br>");
        return ($oCon);
    }
}


 ?>