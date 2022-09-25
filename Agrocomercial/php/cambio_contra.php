<?php

session_start(); 

include 'conexion.php';


if(isset ($_POST ['editar'])) {


    $passActual = $_POST['passActual'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    $passActual = md5($passActual);
    $pass1 = md5($pass1);
    $pass2 = md5($pass2);

    $sqlA = mysqli_query($conn,"SELECT password FROM usuario WHERE id_usuario = 'id_usuario'");
    $rowA = $sqlA ->fetch_array();

    if($rowA['password'] == $passActual) {

        if($pass1 == $pass2){
            $update = $mysqli_query($conn,"UPDATE usuario SET password = '$pass1' WHERE id_usuario '".$_SESSION['id_usuario']."'");
            if($update) {echo "Se ha actualizado tu contraseña";}
            header("location: ../home.php");
        }else{
            echo "Las contraseñas no coinciden";
        }


    }else{
        echo "tu contraseña actual no coincide";
    }
}

?>
