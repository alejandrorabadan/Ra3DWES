<?php
$numeroAleatorio1 = rand(0,20);
$numeroAleatorio2 = rand(0,20);
$operandos = ["+","-","x","/"];
$operandoAleatorio = $operandos[rand(0,3)];
if(isset($_POST['calcular'])){
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operando = $_POST["operando"];
    var_dump($_POST);
    echo ("<br>");
    $resultado = intval($_POST['resultado']);
    echo "El resultado es:".$resultado;
    echo("<br>");
        if($operando == "+"){
            $suma = $num1 + $num2;
            if ($resultado == $suma) {
                echo "OK";
            }
            else{
                echo "MAL";
            }
        }
        if($operandoAleatorio == "-"){
            $resta = $num1 - $num2;
            if ($resultado == intval($resta)) {
                echo "OK";
            }
            else{
                echo "MAL";
            }
        }
        if($operandoAleatorio == "x"){
            $multiplicacion = $num1 * $num2;
            if ($resultado == $multiplicacion) {
                echo "OK";
            }
            else{
                echo "MAL";
            }
        }
        if($operandoAleatorio == "/"){
             $division = $num1 / $num2;
             if ($resultado == $division) {
                 echo "OK";
             }
             else{
                 echo "MAL";
             }
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
        <input type="number" name="num1" value="<?php echo $numeroAleatorio1?>">
        <input type="text" name="operando" value="<?php echo $operandoAleatorio?>">
        <input type="number" name="num2" value=<?php echo $numeroAleatorio2?>>
        =
        <input type="number" name="resultado">
        <button type="submit" name="calcular" value="calcular">Calcular</button>
    </form>
</body>
</html>