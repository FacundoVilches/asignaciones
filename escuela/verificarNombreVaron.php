<?php
 require '../sesion/config.php';
 require '../funciones/autenticacion.php';
 autenticar();
 $link = mysqli_connect("localhost","root","","barriogodoy");

 if(isset($_POST['nombreVaron'])){
     $sql = "SELECT nombre FROM varones WHERE nombre='".$_POST['nombreVaron']."'";
     $result = mysqli_query($link,$sql);
     if(mysqli_num_rows($result)>0){
         echo '<div class="m-1 text-danger" style="font-weight:bold;">Ya existe alguien con este nombre</div>';
     }
 }

?>