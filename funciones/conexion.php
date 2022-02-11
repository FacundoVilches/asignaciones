<?php

function conectar(){
    $link = mysqli_connect(
        'localhost',
        'root',
        '',
        'barriogodoy'
    );
    return $link;
}
