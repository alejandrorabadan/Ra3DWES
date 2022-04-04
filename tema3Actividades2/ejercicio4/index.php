<?php

$aAlumnos = array("Alejandro Rabadan Rivas"=>array("primeraEvaluacion"=>array("DEWS"=>5,"HLC"=>6,"DWEC"=>7), "segundaEvaluacion"=>array("DEWS"=>9,"HLC"=>7,"DWEC"=>5)),
    "Paco"=>array("primeraEvaluacion"=>array("DEWS"=>2,"HLC"=>5,"DWEC"=>9), "segundaEvaluacion"=>array("DEWS"=>4,"HLC"=>7,"DWEC"=>8)),
    "Julian"=>array("primeraEvaluacion"=>array("DEWS"=>3,"HLC"=>2,"DWEC"=>5), "segundaEvaluacion"=>array("DEWS"=>4,"HLC"=>4,"DWEC"=>7)),
);

$aOpciones = array("1. Listado de alumnos con las notas de la primera y segunda evaluación",
"2. Asignatura con mayor número de aprobados","3. Asignatura con mayor número de suspensos",
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
    <form action="./index.php" method="post">
        <select name="opcion">
            <?php
            $contador = 0;
            foreach($aOpciones as $opcion){
                $contador++;
                echo "<option value='$contador'>$opcion</option>";
            }
            ?>
        </select>
        <input type="submit" value="Enviar" name="enviar">
    </form>
</body>
</html>
<?php
if(isset($_POST['enviar'])){
    $opcion = $_POST['opcion'];
    if($opcion == 1){
        foreach($aAlumnos as $alumno => $aNotas){
            echo "<h1>$alumno</h1>";
            foreach($aNotas['primeraEvaluacion'] as $asignatura => $nota){
                echo "<p>$asignatura: $nota</p>";
            }
        }
    }
    if($opcion == 2){
        $aAprobados = array();
        echo "<br>";
        foreach($aAlumnos as $alumno => $aNotas){
            foreach($aNotas['segundaEvaluacion'] as $asignatura => $nota){
                if($nota >= 5){
                    array_push($aAprobados, $asignatura);
                }
            }
        }
        $dwesContador = 0;
        $hlcContador = 0;
        $dwecContador = 0;
        foreach($aAprobados as $asignatura){
            if($asignatura == "DEWS"){
                $dwesContador++;
            }
            if($asignatura == "HLC"){
                $hlcContador++;
            }
            if($asignatura == "DWEC"){
                $dwecContador++;
            }
        }
        echo "La asignatura con mayor numero de aprobados es: ";
        if($dwesContador > $hlcContador && $dwesContador > $dwecContador){
            echo "DEWS";
        }
        if($hlcContador > $dwesContador && $hlcContador > $dwecContador){
            echo "HLC";
        }
        if($dwecContador > $dwesContador && $dwecContador > $hlcContador){
            echo "DWEC";
        }
        else{
            echo "Hay que empatan en aprobados";
        }
    }
    if($opcion == 3){
        $aAprobados = array();
        echo "<br>";
        foreach($aAlumnos as $alumno => $aNotas){
            foreach($aNotas['segundaEvaluacion'] as $asignatura => $nota){
                if($nota < 5){
                    array_push($aAprobados, $asignatura);
                }
            }
        }
        $dwesContador = 0;
        $hlcContador = 0;
        $dwecContador = 0;
        foreach($aAprobados as $asignatura){
            if($asignatura == "DEWS"){
                $dwesContador++;
            }
            if($asignatura == "HLC"){
                $hlcContador++;
            }
            if($asignatura == "DWEC"){
                $dwecContador++;
            }
        }
        echo "La asignatura con mayor numero de suspensos es: ";
        if($dwesContador > $hlcContador && $dwesContador > $dwecContador){
            echo "DEWS";
            return;
        }
        if($hlcContador > $dwesContador && $hlcContador > $dwecContador){
            echo "HLC";
            return;
        }
        if($dwecContador > $dwesContador && $dwecContador > $hlcContador){
            echo "DWEC";
            return;
        }
        else{
            echo "Hay que empatan en suspensos";
        }
    }
}
?>