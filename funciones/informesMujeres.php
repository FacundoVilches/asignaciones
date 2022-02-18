<?php

function verHistorial() {
    $idvarones=$_GET['idmujeres'];
    $link = conectar();
    $sql =  "SELECT idinformes_mujeres,
                    date_format(fecha,\"%d-%m-%Y\") as 'fecha',
                    observaciones,
                    tema,
                    sala
            FROM informes_mujeres
            WHERE idmujeres =".$idvarones;
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;    
}

function cantidadAsignaciones() {
    $id=$_GET['idmujeres'];
    $link=conectar();
    $sql = "SELECT 1 from informes_mujeres
            WHERE idmujeres =".$id;
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    $cantidad = mysqli_num_rows($resultado);
    return $cantidad;
}

function verInformePorID(){
    $idInforme = $_GET['idinformes_mujeres'];
    $link = conectar();
    $sql = "SELECT idinformes_mujeres, 
                    m.idmujeres, 
                    nombre,
                    -- date_format(fecha,\"%d-%m-%Y\") as
                    fecha,
                    tema,
                    sala,
                    observaciones 
            FROM informes_mujeres i,mujeres m
            WHERE m.idmujeres=i.idmujeres
            AND idinformes_mujeres =".$idInforme;
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    $informe = mysqli_fetch_assoc($resultado);
    return $informe;
}

function agregarInforme(){
    $idmujeres = $_POST['idmujeres'];
    $fecha = $_POST['fecha'];
    $observaciones = $_POST['observaciones'];
    $tema = $_POST['tema'];
    $sala = $_POST['sala'];
    $link = conectar();
    $sql = "INSERT INTO informes_mujeres 
            VALUES (DEFAULT,".$idmujeres.",'".$fecha."','".$observaciones."','".$tema."','".$sala."')";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function actualizarInforme() {
    $idMujer = $_POST['idmujeres'];
    $idInforme = $_POST['idinformes_mujeres'];
    $fecha = $_POST['fecha'];
    $tema = $_POST['tema'];
    $sala = $_POST['sala'];
    $observaciones = $_POST['observaciones'];
    $link = conectar();
    $sql = "UPDATE informes_mujeres
            SET fecha ='".$fecha."',
                tema ='".$tema."',
                sala ='".$sala."',
                observaciones ='".$observaciones."'
            WHERE idinformes_mujeres=".$idInforme;
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function eliminarInforme(){
    $id = $_POST['idinformes_mujeres'];
    $link = conectar();
    $sql = "DELETE FROM informes_mujeres
            WHERE idinformes_mujeres =".$id;
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function listaInformesMujeres() {
    $link = conectar();
    $sql = "SELECT idinformes_mujeres,m.idmujeres,m.nombre,date_format(fecha,\"%d-%m-%Y\") as 'fecha' 
            FROM mujeres m, informes_mujeres i
            WHERE m.idmujeres = i.idmujeres;";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function informesAlerta() {
    $link = conectar();
    $sql = "SELECT m.idmujeres,m.nombre,timestampdiff(DAY,max(fecha),curdate()) as 'fecha'
            FROM mujeres m, informes_mujeres i
            WHERE m.idmujeres = i.idmujeres
            GROUP BY nombre
            ORDER BY fecha DESC
            LIMIT 20;";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function noAsignados() {
    $link = conectar();
    $sql = "SELECT nombre,m.idmujeres
            FROM mujeres m
            WHERE NOT EXISTS (SELECT null
                            FROM informes_mujeres i
                            WHERE m.idmujeres = i.idmujeres);";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function cantidadNoAsignados() {
    $link = conectar();
    $sql = "SELECT nombre,m.idmujeres
            FROM mujeres m
            WHERE NOT EXISTS (SELECT null
                                FROM informes_mujeres i
                                WHERE m.idmujeres = i.idmujeres);";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    $cantidad = mysqli_num_rows($resultado);
    return $cantidad;
}

?>