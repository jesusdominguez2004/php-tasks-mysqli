<?php

    include "db.php";

    // if (isset($_POST["save_task"])) {
    //     echo "saving";
    // }

    if (isset($_POST["save_task"])) {
        $title = $_POST["title"];
        $description = $_POST["description"];
        // echo $title;
        // echo "<br>";
        // echo $description;

        $query = "INSERT INTO tasks(title, description) VALUES ('$title', '$description')";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            die ("Query Failed");
        }

        // echo "Saved";

        $_SESSION['message'] = 'Task Saved succesfully!';
        $_SESSION['message_type'] = 'success';

        header("Location: index.php");
    }

    
?>