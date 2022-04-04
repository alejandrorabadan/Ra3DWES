<?php
$comunidades = array(
    "Andalucía" => array("Almería", "Cádiz", "Córdoba", "Granada", "Huelva", "Jaén", "Málaga", "Sevilla"),
    "Aragón" => array("Huesca", "Teruel", "Zaragoza"),
    "Asturias" => array("Asturias"),
    "Baleares" => array("Islas Baleares"),
    "Canarias" => array("Las Palmas", "Santa Cruz de Tenerife"),
    "Cantabria" => array("Cantabria"),
    "Castilla y León" => array("Ávila", "Burgos", "León", "Palencia", "Salamanca", "Segovia", "Soria", "Valladolid", "Zamora"),
    "Castilla-La Mancha" => array("Albacete", "Ciudad Real", "Cuenca", "Guadalajara", "Toledo"),
    "Cataluña" => array("Barcelona", "Gerona", "Lérida", "Tarragona"),
    "Galicia" => array("A Coruña", "Lugo", "Ourense", "Pontevedra", "Santiago de Compostela"),
    "País Vasco" => array("Álava", "Guipúzcoa", "Vizcaya"),
    "Ceuta" => array("Ceuta"),
    "Melilla" => array("Melilla")
);

//genera la comunidad autonoma a adivinar
$comunidad = array_rand($comunidades);
//genera un array de comunidades para tener otras posibiliadaes
$comunidad2 = array_rand($comunidades,4);
//genera 4 provincias aleatorias
$provincia2 = $comunidades[$comunidad2[0]][0];
$provincia3 = $comunidades[$comunidad2[1]][0];
$provincia4 = $comunidades[$comunidad2[2]][0];
$provincia5 = $comunidades[$comunidad2[3]][0];
echo("<br>");
//generar una provincia aleatoria de la comunidad aleatoria
$provincia = array_rand($comunidades[$comunidad]);
$provinciaCorrecta = $comunidades[$comunidad][$provincia];
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
    <h1>Selecciona las pronvicias que pertenecen a la siguiente comunidad autónoma</h1>
    <p><?php echo($comunidad)?></p>
    <form action="index.php" method="post">
    <input type="hidden" name="comunidad" value="<?php echo $comunidad?>">
    <?php echo($provinciaCorrecta)?><input type="checkbox" name="provincias[]" value="<?php echo($provinciaCorrecta)?>">
    <?php echo($provincia2)?><input type="checkbox" name="provincias[]" value="<?php echo($provincia2)?>">
    <?php echo($provincia3)?><input type="checkbox" name="provincias[]" value="<?php echo($provincia3)?>">
    <?php echo($provincia4)?><input type="checkbox" name="provincias[]" value="<?php echo($provincia4)?>">
    <?php echo($provincia5)?><input type="checkbox" name="provincias[]" value="<?php echo($provincia5)?>">
        <input type="submit" value="Enviar" name="enviar">
    </form> 
</body>
</html>
<?php
if(isset($_POST["enviar"])){
    $comunidadAntigua = $_POST["comunidad"];
    $aProvinciasSeleccionadas = $_POST["provincias"];
    for ($i=0; $i < count($aProvinciasSeleccionadas); $i++) { 
        if(in_array($aProvinciasSeleccionadas[$i],$comunidades[$comunidadAntigua])){
            echo("<br>");
            echo("<h1>Has acertado</h1>");
            echo("<p>La comunidad autónoma es: ".$comunidadAntigua."</p>");
            echo("<p>Las provincias que has seleccionado son: ".$aProvinciasSeleccionadas[$i]."</p>");
        }
        else{
            echo("<br>");
            echo("<h1>Has fallado</h1>");
            echo("<p>La comunidad autónoma es: ".$comunidadAntigua."</p>");
            echo("<p>Las provincias que has seleccionado son: ".$aProvinciasSeleccionadas[$i]."</p>");
        }
    }
}
?>