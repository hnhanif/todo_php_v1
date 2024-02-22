<?php include "header.php";
include "db_con.php";
global $connection;
?>

<?php
if (isset($_POST['add_btn'])) {
    $task_name = $_POST['task_name'];
    $query = "INSERT INTO task(task_name) VALUES ('$task_name')";
    $result = mysqli_query($connection, $query);
    if ($result) {
        header("location:index.php?add_msg=Added successful");
    } else {
        die("something went wrong");
    }
}
?>

<form action="add_task.php" method="POST">
    <div class="mb-3">
        <label for="task_name" class="form-label">Task Name</label>
        <input type="text" id="task_name" name="task_name" class="form-control"/>
    </div>
    <div class="btn-wrapper d-flex justify-content-between">
        <a href="index.php" class="btn btn-secondary">Back</a>
        <input type="submit" value="ADD TASK" class="btn btn-primary" name="add_btn">
    </div>
</form>

<?php include "footer.php"; ?>
