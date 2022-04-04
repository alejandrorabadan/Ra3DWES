<?php
$aPais = array(
    "España"=>"Madrid"
    ,"Italia"=>"Roma"
    ,"Francia"=>"Paris"
    ,"Portugal"=>"Lisboa"
    ,"ReinoUnido"=>"Londres"
    ,"Alemania"=>"Berlín"
);
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
    <form action="index.php" method="post">
        <?php
        foreach ($aPais as $sPais => $sCapital) {
            echo "$sPais";
            echo "  <input type='text' name='$sPais'><br>";
        }
        ?>
        <input type="submit" value="Enviar" name="enviar">
        <input type="submit" value="verRespuestas" name="verRespuestas">
    </form>

</body>
</html>
<?php
if(isset($_POST['enviar'])){
    $correctas = 0;
    $incorrectas = 0;
    foreach ($aPais as $sPais => $sCapital) {
        if($_POST[$sPais] == $sCapital){
            $correctas++;
        }
        else{
            echo "La capital de $sPais es $sCapital<br>";
            $incorrectas++;
        }
        
    }
    echo "Has acertado: ".$correctas."<br>";
    echo "Has fallado: ".$incorrectas."<br>";
}
if(isset($_POST['verRespuestas'])){
    foreach ($aPais as $sPais => $sCapital) {
        echo "$sPais ";
        echo "$sCapital <br>";
    }
}

?>