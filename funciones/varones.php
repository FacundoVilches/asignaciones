<?php

function listarVarones() {
    $link = conectar();
    $sql = "SELECT idvarones, nombre
            FROM varones";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function agregarVaron() {
    $nombre = ucwords($_POST['nombre']);
    $contacto = $_POST['contacto'];
    $link = conectar();
    $sql = "INSERT INTO varones VALUES (DEFAULT,'".$nombre."','".$contacto."')";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function verVaronID() {
    $id = $_GET['idvarones'];
    $link = conectar();
    $sql = "SELECT idvarones,nombre,contacto
            FROM varones
            WHERE idvarones =".$id;
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    $perfil = mysqli_fetch_assoc($resultado);
    return $perfil;
}

function actualizarVaron() {
    $nombre = $_POST['nombre'];
    $contacto = $_POST['contacto'];
    $id = $_POST['idvarones'];
    $link = conectar();
    $sql = "UPDATE varones
            SET nombre='". $nombre ."',contacto='". $contacto ."'
            WHERE idvarones=".$id;
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function eliminarVaronConInformes() {
    $id = $_POST['idvarones'];
    $link = conectar();
    $sql = "DELETE v,i FROM varones AS v INNER JOIN informes_varones AS i
            WHERE v.idvarones=i.idvarones AND v.idvarones LIKE ".$id;
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function eliminarVaronSinInformes(){
    $id = $_POST['idvarones'];
    $link = conectar();
    $sql = "DELETE FROM varones
            WHERE idvarones=".$id;
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}
