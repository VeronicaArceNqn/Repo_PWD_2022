<?php
if ($_GET){
    $lunes=$_GET['inglunes'];
    $martes=$_GET['ingmartes'];
    $miercoles=$_GET['ingmiercoles'];
    $jueves=$_GET['ingjueves'];
    $viernes=$_GET['ingviernes'];

    $horario = [];
    $horario[0] =[
        "día" => "lunes",
        "horas" => $lunes,
    ];
    $horario[1] =[
        "día" => "martes",
        "horas" => $martes,
    ];
    $horario[2] =[
        "día" => "miercoles",
        "horas" => $miercoles,
    ];
    $horario[3] =[
        "día" => "jueves",
        "horas" => $jueves,
    ];
    $horario[4] =[
        "día" => "viernes",
        "horas" => $viernes,
    ];

$sumahoras = array($lunes, $martes, $miercoles, $jueves, $viernes);
echo "Cantidad de horas Prog. Dinamica =" . array_sum($sumahoras). "</br>";
 
}

?>
<a href="../Vista/ej2.html">Volver a inicio</a>