<?php

    include 'conexion.php';
    include 'ingresarsala.php';
    //include 'ingresarsala.php'
    //setlocale(LC_ALL, 'es_ES');
    //date_default_timezone_set('America/Tegucigalpa');
    //$fecha = date('m/d/Y g:ia');
    //var_dump($fecha);
    //$time = time();
    //date("d-m-Y (H:i:s)", $time);
    //var_dump(date("d-m-Y (H:i:s)", $time));
    
    $idsala = $_SESSION['IDSala'];

    
    //$result = mysqli_query ($link, sprintf ( "SELECT * FROM MensajesxSala WHERE IDSala = '%s'",$idsala));
    $result = mysqli_query ($link, sprintf ( "SELECT * FROM UsuariosxSala INNER JOIN Usuario ON UsuariosxSala.IDUsuario = Usuario.IDUsuario WHERE IDSala = '%s'",$idsala));

    $mensajes=array();

    if (mysqli_num_rows($result)!= 0)
        {     
            while($row = mysqli_fetch_array($result))
            {
                $mensajes[]=$row;
            }
        }
        echo json_encode($mensajes);
?>