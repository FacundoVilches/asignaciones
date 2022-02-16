<?php

function buscadorV(){
$nombre = $_POST['nombre'];
$sala = $_POST['sala'];
$fecha = $_POST['fecha'];
$tema = $_POST['tema'];
$link = conectar();

if ($nombre == '') {
    $nombre = ' ';
}

if ($nombre == "" && $fecha == "" && $tema == "" && $sala == "") {
    $sql = "SELECT idinformes_varones,v.idvarones,nombre,fecha
            FROM informes_varones i, varones v
            WHERE v.idvarones = i.idvarones ";
} else {
    $sql = "SELECT idinformes_varones,v.idvarones,nombre,fecha
            FROM informes_varones i, varones v
            WHERE v.idvarones = i.idvarones ";
    if ($nombre != '') {
        $sql .= " AND v.nombre LIKE '%" . $nombre . "%' ";
    }

    if ($fecha != '') {
        $sql .= " AND fecha='" . $fecha . "' ";
    }

    if ($tema != '') {
        $sql .= " AND tema='" . $tema . "' ";
    }

    if ($sala != '') {
        $sql .= " AND sala='" . $sala . "' ";
    }
}

$resultado = mysqli_query($link, $sql)
                or die(mysqli_error($link));
    return $resultado;
}

function buscadorM(){
    $nombre = $_POST['nombre'];
$sala = $_POST['sala'];
$fecha = $_POST['fecha'];
$tema = $_POST['tema'];
$link = conectar();

if ($nombre == '') {
    $nombre = ' ';
}

if ($nombre == "" && $fecha == "" && $tema == "" && $sala == "") {
    $sql = "SELECT idinformes_mujeres,m.idmujeres,nombre,fecha
            FROM informes_mujeres i, mujeres m
            WHERE m.idmujeres = i.idmujeres ";
} else {
    $sql = "SELECT idinformes_mujeres,m.idmujeres,nombre,fecha
            FROM informes_mujeres i, mujeres m
            WHERE m.idmujeres = i.idmujeres ";
    if ($nombre != '') {
        $sql .= " AND m.nombre LIKE '%" . $nombre . "%' ";
    }

    if ($fecha != '') {
        $sql .= " AND fecha='" . $fecha . "' ";
    }

    if ($tema != '') {
        $sql .= " AND tema='" . $tema . "' ";
    }

    if ($sala != '') {
        $sql .= " AND sala='" . $sala . "' ";
    }
}

$resultado = mysqli_query($link, $sql)
                or die(mysqli_error($link));
    return $resultado;
}
