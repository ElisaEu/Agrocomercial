<?php

    session_start();

    include 'conexion.php';

    $email = $_POST['email'];
    $password = $_POST['password'];


    $validar_login = mysqli_query($conn, "SELECT * FROM usuario WHERE email = '$email'
    and password = '$password' ");


    if(mysqli_num_rows($validar_login) > 0){
        header("location: ../home.php");
        exit;
    }else{
        echo '
            <script>
                alert("Los datos no coinciden con ninguna cuenta");
                window.location = "../index.php";
            </script>
        ';
        Exit;
    }

?>
