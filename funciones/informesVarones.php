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
    $sql = "SELECT v.idvarones,v.nombre,timestampdiff(DAY,max(fecha),curdate()) as 'fecha'
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
                    observaciones,
                    tema,
                    sala
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
    $tema = $_POST['tema'];
    $sala = $_POST['sala'];
    $link = conectar();
    $sql = "INSERT INTO informes_varones 
            VALUES (DEFAULT,".$idvarones.",'".$fecha."','".$observaciones."','".$tema."','".$sala."')";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function cantidadAsignaciones() {
    $id=$_GET['idvarones'];
    $link=conectar();
    $sql = "SELECT 1 from informes_varones
            WHERE idvarones =".$id;
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    $cantidad = mysqli_num_rows($resultado);
    return $cantidad;
}

function cantidadNoAsignados() {
    $link = conectar();
    $sql = "SELECT nombre,v.idvarones
            FROM varones v
            WHERE NOT EXISTS (SELECT null
                                FROM informes_varones i
                                WHERE v.idvarones = i.idvarones);";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    $cantidad = mysqli_num_rows($resultado);
    return $cantidad;
}

function verInformePorID(){
    $idInforme = $_GET['idinformes_varones'];
    $link = conectar();
    $sql = "SELECT idinformes_varones, 
                    v.idvarones, 
                    nombre,
                    -- date_format(fecha,\"%d-%m-%Y\") as
                    fecha,
                    tema,
                    sala,
                    observaciones 
            FROM informes_varones i,varones v
            WHERE idinformes_varones =".$idInforme;
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    $informe = mysqli_fetch_assoc($resultado);
    return $informe;
}

function actualizarInforme() {
    $idInforme = $_POST['idinformes_varones'];
    $fecha = $_POST['fecha'];
    $tema = $_POST['tema'];
    $sala = $_POST['sala'];
    $observaciones = $_POST['observaciones'];
    $link = conectar();
    $sql = "UPDATE informes_varones
            SET fecha ='".$fecha."',
                tema ='".$tema."',
                sala ='".$sala."',
                observaciones ='".$observaciones."'
            WHERE idinformes_varones=".$idInforme;
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function eliminarInforme(){
    $id = $_POST['idinformes_varones'];
    $link = conectar();
    $sql = "DELETE FROM informes_varones
            WHERE idinformes_varones =".$id;
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}
?>