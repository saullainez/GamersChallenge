<?php
    $link = mysqli_connect ("db4free.net:3306", "usuariogamer", "gamerchallenge");
	mysqli_select_db( $link, "gamercha_chat2" );
    if(mysqli_connect_errno())
    {
        printf("conexion fallida", mysqli_connect_error());
        exit();
    }
?>