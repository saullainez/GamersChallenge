<?php
    $link = mysqli_connect ("prueba-gamers.herokuapp.com", "gamerchallenge@localhost", "");
	mysqli_select_db( $link, "gamercha chat2" );
    if(mysqli_connect_errno())
    {
        printf("conexion fallida", mysqli_connect_error());
        exit();
    }
?>