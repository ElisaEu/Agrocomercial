<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
        display: block;
        margin: 0px;
        }
        body {
            margin:;
        }
        .login{
           background-image: url(imagenes/login2.jpeg);
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
            margin-top: -330px;
            margin-left: 450px;  
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }     
        .casilla2{
            margin-top: 20px;
            margin-left: 450px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .check{
            margin-top: 20px;
            margin-left: 440px; 
            font-size: 14px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        a{
        display: block;
        width: 60px;
        padding: 10px;
        width: 80px;
        font-size: 20px;
        font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        color: black;
        margin-top: 15px;
        margin-left: 123px; 
        border-radius: 5px;
        background-color: rgb(78, 159, 197);    
        text-decoration: none; 
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
            margin-left: 120px;
        }

        button:hover{
            background-color: blue;
            color: white;
            cursor: pointer;
        }

        .new{
            padding: none;
            font-size: 13px;
            border-radius: 5px; 
            color:black;
            background-color: white;
            margin-left: 250px;
            margin-top: -55px;
        }
        .new:hover{
            background-color: white;
            color: black;
            text-decoration:underline;
        }
    </style>

</head>
<body>
    <div class="login">
        <form action="php/login_usuario.php" method="POST">
            <div class="casilla1">
            </div>
              <div class="email">
                <i class="fa-solid fa-user"></i>
                <input type="text" placeholder="Su email" name="email" style="width:290px; height:30px">
              </div>
            <div class="casilla2">
              <i class="fa-solid fa-lock"></i>
              <input type="password" placeholder="Su contraseña" name="password" style="width:290px; height:30px">
            </div>
            <div class="check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Recordar</label> 
              <button>Ingresar</button>

              <a href="newpassword.php" class="new"">¿Olvidaste la contraseña?</a>
            </div>
        
          </form>

    </div>

</body>
</html>