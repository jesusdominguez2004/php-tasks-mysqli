<?php
    // Iniciar sessión:
    session_start();

    // Conexión tipo MySQLi SERVIDOR LOCAL:
    $conn = mysqli_connect(
        "localhost",
        "root",
        "",
        "bd_tasks_mysql"
    );

    // Conexión tipo MySQLi SERVIDOR WEB:
    // Ingresar a database/...
    // $conn = mysqli_connect(
    //     "localhost",
    //     "root",
    //     "",
    //     "bd_tasks_mysql"
    // );

    // if (isset($conn)) {
    //     echo "DB is connected!";
    // }
?>