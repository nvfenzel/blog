<?php

require 'admin/config.php';

require 'functions.php';

$conexion = conexion($bd_config);

if (!$conexion) {
    header('Location: error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
    $busqueda = limpiarDatos($_GET['busqueda']);
    $statement = $conexion->prepare(
        'SELECT*FROM articulos WHERE titulo LIKE :busqueda'
    );
    $statement->execute(array(':busqueda' => "%$busqueda%"));
    $resultados = $statement->fetchAll();

    if (empty($resultados)) {
        $titulo = 'No se encontraron articulos con el resultado: ' . $busqueda;
    } else {
        $titulo = 'Resultados de la búsqueda: ' . $busqueda;
    }
} else {
    header('Location: index.php');
}

require 'views/buscar.view.php';
