<?php
    // ...
    session_start();

    // Conexión tipo MySQLi
    $conn = mysqli_connect(
        "localhost",
        "root",
        "",
        "bd_tasks_mysql"
    );

    // if (isset($conn)) {
    //     echo "DB is connected!";
    // }
?>