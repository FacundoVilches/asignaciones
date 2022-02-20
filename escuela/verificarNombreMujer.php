<?php
 require '../sesion/config.php';
 require '../funciones/autenticacion.php';
 autenticar();
 $link = mysqli_connect("localhost","root","","barriogodoy");

 if(isset($_POST['nombreMujer'])){
     $sql = "SELECT nombre FROM mujeres WHERE nombre='".$_POST['nombreMujer']."'";
     $result = mysqli_query($link,$sql);
     if(mysqli_num_rows($result)>0){
         echo '<div class="m-1 text-danger" style="font-weight:bold;">Ya existe alguien con este nombre</div>';
     }
 }
