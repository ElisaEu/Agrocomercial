<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Contraseña</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .newpassword{
           background-image: url(imagenes/newpassword.jpeg);
           background-repeat: no-repeat;
           background-position: center center;
           background-size: cover;
           height: 800px;
           width: 1200px;
        }  
        .casilla1{
            margin: 2px 50px;
           height: 800px;
           width: 1200px; 
        }
        .email{
            margin-top: -400px;
            margin-left: 450px;  
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }     
        .casilla2{
            margin-top: 40px;
            margin-left: 450px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        a {
        display: block;
        width: 90px;
        padding: 5px;
        width: 100px;
        font-size: 16px;
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        color: black;
        margin-top: 50px;
        margin-left: 530px; 
        border-radius: 5px;
        background-color: rgb(78, 159, 197);    
        text-decoration: none; 
        text-align: center;
        }
        a:hover{
            background-color: blue;
            color: white;
            cursor: pointer;
        }
        button {
            display: block;
            background-color: #4B38ED;
            text-align: center;
            padding: 10px;
            font-size: 18px;
            font-weight: 700;
            margin-botton: 20px;
            border: none;
            margin-left: 570px;
            margin-top: 30px;
        }

        button:hover{
            background-color: blue;
            color: white;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <div class="newpassword">
        <form action="php/cambio_contra.php" method="POST">
            <div class="casilla1">
            </div>
              <div class="email">
                <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Ingrese contraseña actual" name="passActual" style="width:290px; height:30px">
                <div>
                  <i class="fa-solid fa-lock"></i>
                <input type="password" placeholder="Ingrese su contraseña nueva" name="pass1" style="width:290px; height:30px; margin-top: 40px">
                </div>
              </div>
            <div class="casilla2">
                <i class="fa-solid fa-check"></i>
              <input type="password" placeholder="Confirme su contraseña nueva" name="pass2" style="width:290px; height:30px">
            </div>
              <button name="editar">Guardar</button>
            </div>
        
          </form>

    </div>

</body>
</html>