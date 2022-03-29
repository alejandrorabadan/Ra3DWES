<?php
if(isset($_POST['generarAleatorio'])){
    $n1 = $_POST["num1"];
    $n2 = $_POST["num2"];
    if($n2 > $n1){
        $numeroAleatorio = round(rand($n1,$n2));
        echo $numeroAleatorio;
    }
    if ($n1 > $n2){
        $n1 = $_POST["num1"];
        $n2 = $_POST["num2"];
        $numeroAleatorio = round(rand($n2,$n1));
        echo $numeroAleatorio;
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
        Num1:<input type="number" name="num1">
        Num2:<input type="number" name="num2">
        <button type="submit" name="generarAleatorio">Generar</button>
    </form>
</body>
</html>