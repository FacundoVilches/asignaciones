<?php

function borrarInformesV(){
    $link = conectar();
    $sql = "TRUNCATE TABLE informes_varones";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function borrarInformesM(){
    $link = conectar();
    $sql = "TRUNCATE TABLE informes_mujeres";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function borrarVarones(){
    $link = conectar();
    $sql = "CALL borrarListaVarones;";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}


function borrarMujeres(){
    $link = conectar();
    $sql = "CALL borrarListaMujeres";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function borrarInformesVarones(){
    $link = conectar();
    $sql = "TRUNCATE TABLE informes_varones";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function borrarInformesMujeres() {
    $link = conectar();
    $sql = "TRUNCATE TABLE informes_mujeres";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

function resetDatabase(){
    $link = conectar();
    $sql = "CALL resetDatabase";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}
?>