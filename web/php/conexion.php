<?php
    $link = mysqli_connect ("localhost:3306", "gamerchallenge@localhost", "");
	mysqli_select_db( $link, "gamercha_chat2" );
    if(mysqli_connect_errno())
    {
        printf("conexion fallida", mysqli_connect_error());
        exit();
    }
?>