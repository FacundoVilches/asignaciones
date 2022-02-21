<?php

function login() {
    $username = $_POST['username'];
    $clave = $_POST['clave'];
    $link = conectar();
    $sql = "SELECT idusuario, nombre
            FROM usuarios
            WHERE username='".$username."'
            AND clave='".$clave."'";
    $resultado = mysqli_query($link,$sql)
                    or die(mysqli_error($link));
    $cantidad = mysqli_num_rows($resultado);

    if($cantidad == 0){
        header('location:index.php?error=1');
        return;
    } else {
        $usuario = mysqli_fetch_assoc($resultado);
        $_SESSION['login'] = 'autorizado';
        $_SESSION['idusuario'] = $usuario['idusuario'];
        $_SESSION['nombre'] = $usuario['nombre'];

        if($username == 'cesarbrochero'){
            header('location:discursos/admin.php');
        }

        if($username == 'flavioescobar'){
            header('location:escuela/admin.php');
        }

        
    }
}

function logout() {
    session_unset();
    session_destroy();
    header('refresh:3; url=../index.php');
}

function autenticar()
{
    if(!isset($_SESSION['login'])){
        header('location: ../index.php?error=2');
    }
    if(($_SESSION['nombre'] != 'Flavio Escobar')){
        session_unset();
        session_destroy();
        header('location: ../index.php?error=3');
    }
}

function autenticar2()
{
    if(!isset($_SESSION['login'])){
        header('location: ../index.php?error=2');
    }
    if(($_SESSION['nombre'] != 'César Brochero')){
        session_unset();
        session_destroy();
        header('location: ../index.php?error=3');
    }
}

?>