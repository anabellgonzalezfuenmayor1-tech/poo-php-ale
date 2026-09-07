<?php

require_once "class/Reporte.php";
require_once "class/Aprendiz.php";
require_once "class/Backend.php";
require_once "class/Frontend.php";
require_once "class/Equipo.php";


$aprendiz1 = new Backend(
    "Carlos",
    "123456",
    "ADSO",
    "PHP, C#"
);

$aprendiz2 = new Frontend(
    "Laura",
    "654321",
    "ADSO",
    "HTML, CSS"
);

$aprendiz3 = new Backend(
    "Juan",
    "121212",
    "ADSO",
    "Python"
);

$aprendiz4 = new Frontend(
    "Ana",
    "111111",
    "ADSO",
    "JavaScript"
);
$aprendiz5 = new Frontend(
    "Freiver",
    "131313",
    "ADSO",
    "JavaScript"
);

$equipo = new Equipo();


$equipo->AgregarAprendiz($aprendiz1);
$equipo->AgregarAprendiz($aprendiz2);
$equipo->AgregarAprendiz($aprendiz3);
$equipo->AgregarAprendiz($aprendiz4);
$equipo->AgregarAprendiz($aprendiz5);

$backend = $equipo->AprendicesPorEspecialidad("Backend");
$frontend = $equipo->AprendicesPorEspecialidad("Frontend");


echo "========================================\n";
echo "       EQUIPO DE APRENDICES\n";
echo "========================================\n\n";


echo "TODOS LOS APRENDICES\n";
echo "----------------------------------------\n";

echo $equipo->MostrarAprendices();

echo "\n\n";


echo "CANTIDAD DE APRENDICES\n";
echo "----------------------------------------\n";

echo "Total de aprendices: ";
echo $equipo->ContarAPrendices();

echo "\n\n";


echo "APRENDICES DE BACKEND\n";
echo "----------------------------------------\n";

foreach ($backend as $aprendiz) {

    echo $aprendiz->GenerarReporte();
    echo "\n";
}

echo "\n";


echo "APRENDICES DE FRONTEND\n";
echo "----------------------------------------\n";

foreach ($frontend as $aprendiz) {

    echo $aprendiz->GenerarReporte();
    echo "\n";
}

echo "\n";


echo "COMPARACIÓN POR ESPECIALIDAD\n";
echo "----------------------------------------\n";

echo $equipo->ContarAprendicesPorEspecialidad();

?>
