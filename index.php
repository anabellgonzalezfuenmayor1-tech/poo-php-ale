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

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Equipo de Aprendices</title>
</head>

<body>

    <h1>Equipo de Aprendices</h1>

    <hr>

    <h2>Todos los aprendices</h2>

    <pre>
<?= $equipo->MostrarAprendices() ?>
    </pre>


    <hr>
    <h2>Cantidad de aprendices</h2>

    <p>
        Total de aprendices:
        <?= $equipo->ContarAPrendices() ?>
    </p>


    <hr>

    <h2>Aprendices de Backend</h2>

    <?php foreach ($backend as $aprendiz): ?>

        <p>
            <?= $aprendiz->GenerarReporte() ?>
        </p>

    <?php endforeach; ?>


    <hr>
    <h2>Aprendices de Frontend</h2>

    <?php foreach ($frontend as $aprendiz): ?>

        <p>
            <?= $aprendiz->GenerarReporte() ?>
        </p>

    <?php endforeach; ?>


    <hr>

    <!-- COMPARACIÓN -->
    <h2>Comparación por especialidad</h2>

    <p>
        <?= $equipo->ContarAprendicesPorEspecialidad() ?>
    </p>

</body>

</html>