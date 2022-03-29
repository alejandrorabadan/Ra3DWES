<?php
if(isset($_POST['comprobar'])){
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    if($pass1 == $pass2){
        echo ("LAS CONTRASEÑAS SON IGUALES");
    }
    else{
        echo("LAS CONTRASEÑAS SON DISTINTAS");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./index.php" method="post">
        Password1:<input type="password" name="pass1">
        Password2:<input type="password" name="pass2">
        <button type="submit" name="comprobar">Comprobar</button>
    </form>
</body>
</html>