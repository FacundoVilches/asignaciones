<?php

function listarMujeres() {
    $link = conectar();
    $sql = "SELECT idmujeres, nombre
            FROM mujeres";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function agregarMujer() {
    $nombre = ucwords($_POST['nombre']);
    $contacto = $_POST['contacto'];
    $link = conectar();
    $sql = "INSERT INTO mujeres VALUES (DEFAULT,'".$nombre."','".$contacto."')";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function verMujerID() {
    $id = $_GET['idmujeres'];
    $link = conectar();
    $sql = "SELECT idmujeres,nombre,contacto
            FROM mujeres
            WHERE idmujeres =".$id;
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    $perfil = mysqli_fetch_assoc($resultado);
    return $perfil;
}

function actualizarMujer() {
    $nombre = $_POST['nombre'];
    $contacto = $_POST['contacto'];
    $id = $_POST['idmujeres'];
    $link = conectar();
    $sql = "UPDATE mujeres
            SET nombre='". $nombre ."',contacto='". $contacto ."'
            WHERE idmujeres=".$id;
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function eliminarMujerConInformes() {
    $id = $_POST['idmujeres'];
    $link = conectar();
    $sql = "DELETE m,i FROM mujeres AS m INNER JOIN informes_mujeres AS i
            WHERE m.idmujeres=i.idmujeres AND m.idmujeres LIKE ".$id;
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function eliminarMujerSinInformes(){
    $id = $_POST['idmujeres'];
    $link = conectar();
    $sql = "DELETE FROM mujeres
            WHERE idmujeres=".$id;
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}
?>