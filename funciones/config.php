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
    $sql = "SET FOREIGN_KEY_CHECKS = 0;
            TRUNCATE TABLE mujeres;
            SET FOREIGN_KEY_CHECKS = 1";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    return $resultado;
}

?>