<?php

include_once('config.php');

if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM usuarios WHERE email='$email' AND password='$password'");
    if ($result->num_rows > 0) {

        session_start();
        $_SESSION['logged_in'] = true;
        $_SESSION['email'] = $email;

        header("Location: home.php");
    } else {
        $error = "Usuario ou Senha Invalidos";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style2.css"/>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 
    <title>Login</title>
</head>
<body>
    <div class="wrapper fadeInDown">
        <div class="content-login">
            <h2 class="active"> Login </h2>
            <form class="box-login" method="post" action="index.php">
              <input type="email" id="email" class="campo" name="email" placeholder="E-mail">
              <input type="password" id="password" class="campo" name="password" placeholder="Senha">
              <input type="submit" class="botao" value="login">
            </form>
            <div class="box-registrar-se">  
              <a class="link" href="Registro.php">Registrar-se ?</a>
            </div>
        </div>
      </div>
</body>
</html>
