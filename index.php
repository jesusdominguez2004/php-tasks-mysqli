<?php include "db.php" ; ?>

<?php include "includes/header.php"; ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <!-- Script sobre los mensajes dinámicos... -->
            <?php if (isset($_SESSION["message"])) { ?>
                <!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" clase="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div> -->
                <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissible">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <?= $_SESSION["message"]; ?>
                </div>
            <?php session_unset(); } ?>

            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
                    </div>
                    <br>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control" placeholder="Task Description"></textarea>
                    </div>
                    <br>
                    <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">
                </form>
            </div>
        </div>

        <!-- Tabla de consultas -->
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created at</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $query = "SELECT * FROM tasks";
                        $results_tasks = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_array($results_tasks)) {
                    ?>

                            <tr>
                                <td><?php echo $row['title']; ?></td>   
                                <td><?php echo $row['description']; ?></td>   
                                <td><?php echo $row['created_at']; ?></td>   
                                <td>
                                    <a href="edit_task.php?id=<?php echo $row['id'];?>">Edit</a>
                                    <a href="delete_task.php?id=<?php echo $row['id'];?>">Delete</a>
                                </td>
                            </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include "includes/footer.php" ?>