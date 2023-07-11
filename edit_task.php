<?php
    include "db.php";

    // Traer datos tarea con método GET:
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $query = "SELECT * FROM tasks WHERE id = $id";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $title = $row["title"];
            $description = $row["description"];
            // echo $title;
            // echo "<br>";
            // echo $description;
        }
    }

    // Cuando se llame a sí mismo con el form POST:
    if (isset($_POST["update"])) {
        $id = $_GET["id"];
        $title = $_POST["title"];
        $description = $_POST["description"];

        // echo $id;
        // echo "<br>";
        // echo $title;
        // echo "<br>";
        // echo $description;
        
        $query = "UPDATE tasks set title = '$title', description = '$description' WHERE id = $id";
        mysqli_query($conn, $query);

        $_SESSION['message'] = 'Task Update Successfully!';
        $_SESSION['message_type'] = 'warning';
        header("Location: index.php");
    }
?>

<?php include "includes/header.php"; ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit_task.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" value="<?php echo $title; ?>" class="form-control" placeholder="Update Title">
                    </div>
                    <br>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Update Description"><?php echo $description; ?></textarea>
                    </div>
                    <br>
                    <button class="btn btn-success" name="update">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>