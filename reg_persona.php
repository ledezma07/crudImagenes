<?php 
include("conexion.php");
$conn =conectar();
echo "Enviando valores desde el formulario";
$ci = $_POST['txt_ci'];
$nom=$_POST['txt_nombres'];
$emai=$_POST['txt_email'];
$pas=$_POST['txt_password'];
$imagen='';
echo "<br> 1Enviando valores desde el formulario";
if (isset($_FILES["txt_avatar"]))
{
    echo "<br> 11111 Enviando valores desde el formulario";
    $file=$_FILES["txt_avatar"];
    $nombreAvatar= $file["name"];
    $tipoAvatar= $file["type"];
    $ruta_temp= $file["tmp_name"];
    $tamanio = $file["size"];
    $dimension =getimagesize($ruta_temp);
    $ancho = $dimension[0];
    $alto =  $dimension[1];
    $directorio = "fotos/";
        if($tipoAvatar != 'image/jpg' && $tipoAvatar != 'image/JPG' && $tipoAvatar != 'image/jpeg' && $tipoAvatar != 'image/png' && $tipoAvatar != 'image/gif')
        {
            echo"Error no es una imagen";
        }
        else if($tamanio > 3*1014*1024)
        {
             echo "El tamaño permitodo es 3MB ";   
        }   
        else{
            $svr =$directorio.$nombreAvatar;
            move:move_uploaded_file($ruta_temp,$svr);
            $imagen =   "foto/".$nombreAvatar;
        }
}
//$sqlInser="INSERT INTO users(ci,name,email,password,avatar) values ($ci','$nom','$emai','$pas','$imagen')";
//$consulta =mysqli_query($conn,"INSERT INTO users(ci,name,email,password,avatar) values ($ci','$nom','$emai','$pas','$imagen')");
$sqlSelect = "INSERT INTO users(ci,name,email,password,avatar) values ($ci','$nom','$emai','$pas',' ')";
$consulta =mysqli_query($conn,$sqlSelect);

?>