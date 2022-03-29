<?php
$aEjercicios = array(
    array('id'=>1,"titulo"=>"Indice","descripcion"=>"indice a los ejercicios","enlace"=>"./index.php"),
    array('id'=>2,"titulo"=>"Indice","descripcion"=>"Ejercicio1","enlace"=>"./ejercicio1/index.php"),
    array('id'=>3,"titulo"=>"Indice","descripcion"=>"Ejercicio2","enlace"=>"./ejercicio2/index.php"),
    array('id'=>4,"titulo"=>"Indice","descripcion"=>"Ejercicio3","enlace"=>"./ejercicio3/index.php"),
    array('id'=>5,"titulo"=>"Indice","descripcion"=>"Ejercicio4","enlace"=>"./ejercicio4/index.php"),
    array('id'=>6,"titulo"=>"Indice","descripcion"=>"Ejercicio5","enlace"=>"./ejercicio5/index.php"),
    
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios php</title>
</head>
<body>
    <h1>Listado de ejercicios</h1>
    <?php
    foreach ($aEjercicios as $key => $value) {
        echo ("<h3>Ejercicio número</h3>");
        echo $value["titulo"]." => ".$value["descripcion"]." => "?><a href="<?php echo ($value['enlace']) ?>" target="_blank">index</a>
      <?php  
    }
    ?>
</body>
</html>