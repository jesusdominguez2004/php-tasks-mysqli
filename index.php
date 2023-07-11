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
        <div class="col-md-8">

        </div>
    </div>
</div>

<?php include "includes/footer.php" ?>