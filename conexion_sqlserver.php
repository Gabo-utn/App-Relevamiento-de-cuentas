<?php


//configutat datos de acceso a la BD
    $dbuser = "DESKTOP-LQP956G\\SQLEXPRESS";
    $userpass = "123456789";

    $dsn = "sqlsrv:Server=DESKTOP-LQP956G\\SQLEXPRESS;Database=notas_php"; 

    try {
        //crear conexion a sqlsrv
        $conn = new PDO($dsn);

        //mostrar msj si la conexcion es correcta

        if ($conn) {
            echo "";            
        }
    } catch (PDOException $e) {
        //si hay error en la conecion
        echo $e->getMessage();

    }  