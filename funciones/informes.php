<?php

function listaInformesVarones() {
    $link = conectar();
    $sql = "SELECT idinformes_varones,v.idvarones,v.nombre,date_format(fecha,\"%d-%m-%Y\") as 'fecha' 
            FROM varones v, informes_varones i
            WHERE v.idvarones = i.idvarones;";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function informesAlerta() {
    $link = conectar();
    $sql = "SELECT v.idvarones,v.nombre,timestampdiff(MONTH,max(fecha),curdate()) as 'fecha'
            FROM varones v, informes_varones i
            WHERE v.idvarones = i.idvarones
            GROUP BY nombre
            ORDER BY fecha DESC
            LIMIT 10;";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function verHistorial() {
    $idvarones=$_GET['idvarones'];
    $link = conectar();
    $sql =  "SELECT idinformes_varones,
                    date_format(fecha,\"%d-%m-%Y\") as 'fecha',
                    observaciones
            FROM informes_varones
            WHERE idvarones =".$idvarones;
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;    
}

function noAsignados() {
    $link = conectar();
    $sql = "SELECT nombre,v.idvarones
            FROM varones v
            WHERE NOT EXISTS (SELECT null
                            FROM informes_varones i
                            WHERE v.idvarones = i.idvarones);";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function agregarInforme(){
    $idvarones = $_POST['idvarones'];
    $fecha = $_POST['fecha'];
    $observaciones = $_POST['observaciones'];
    $link = conectar();
    $sql = "INSERT INTO informes_varones(idvarones,fecha,observaciones) 
            VALUES (".$idvarones.",'".$fecha."','".$observaciones."')";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}
?>