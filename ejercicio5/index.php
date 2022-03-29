<?php
if (isset($_POST['enviar'])){
    if  ($_POST["figura"] == "circulo"){
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
        RADIO<input type="number" name="radio">
        <br>
        COLOR<input type="text" name="color">
        <br>
        <button type="submit" value="eRadio" name="eRadio">Radio</button>
    </form>
</body> 
</html>

<?php
    }
    if  ($_POST["figura"] == "rectangulo"){
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
        Base:<input type="number" name="base">
        <br>
        Altura:<input type="number" name="altura">
        <br>
        COLOR<input type="text" name="color">
        <br>
        <button type="submit" value="eRect" name="eRect">Enviar base y altura</button>
    </form>
</body> 
</html>

<?php
    }
    if  ($_POST["figura"] == "cuadrado"){
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
        lado:<input type="number" name="lado">
        <br>
        COLOR<input type="text" name="color">
        <br>
        <button type="submit" value="eCu" name="eCu">Enviar cuadrado</button>
    </form>
</body> 
</html>

<?php
    }
    
}

if(isset($_POST['eCu'])){
    $color = $_POST["color"];
    $lado = $_POST["lado"];

    ?>
    <svg width="400" height="400">
  <rect width="<?php echo $lado?>" height="<?php echo $lado?>" fill="<?php echo $color?>">
</svg>
    <?php
}

if(isset($_POST["eRect"])){
    $color = $_POST["color"];
    $base = $_POST["base"];
    $altura = $_POST["altura"];
    ?>
    <svg width="400" height="110">
  <rect width="<?php echo $base?>" height="<?php echo $altura?>" fill="<?php echo $color?>">
</svg>
    <?php

}

if(isset($_POST['eRadio'])){
    $color = $_POST["color"];
    $radio = $_POST["radio"];
    ?>
    <svg width="400px" height="400px">
    <circle cx="200" cy='180' r="<?php echo $radio?>" fill="<?php echo $color?>">
    </svg>
    <?php

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
        Circulo<input type="radio" name="figura" value="circulo">
        Rectangulo<input type="radio" name="figura" value="rectangulo">
        Cuadrado<input type="radio" name="figura" value="cuadrado">
        <br>
        <button type="submit" value="enviar" name="enviar">ENVIAR</button>
    </form>
</body>
</html>