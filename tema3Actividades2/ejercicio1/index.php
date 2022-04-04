<?php
$aItems = ["item1","item2","item3","item4","item5","item6","item7","item8","item9","item10"];
if (isset($_POST["validar"])){
    $maximo = 0;
    $aItemsSeleccionados = array();

    for ($i=1; $i < 11; $i++) { 
        $aItemsSeleccionados["item".$i] = $_POST["item".$i];
    }
    echo("El maximo valor es: ".max($aItemsSeleccionados));
    echo ("<br>");
    foreach ($aItemsSeleccionados as $key => $value) {
        if($value == max($aItemsSeleccionados)){
            echo("Los items con dicho valor son:");
            echo("<br>");
            echo $key;
            echo("<br>");

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
    <?php
    foreach ($aItems as $key => $value) {
        echo $value;
        for ($i=1; $i < 6 ; $i++) { 
            echo(" ".$i."<input type='radio' name='$value' value='$i'>");
        }
        ?>
        

        <?php
        echo "<br>";

    }
    ?>
    <input type="submit" value="validar" name="validar">
    </form>
</body>
</html>