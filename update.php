<?php include "header.php";
include "db_con.php";
global $connection;
?>
<?php
$id = $_GET['id'];
$query = "SELECT * FROM task WHERE id='$id'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
?>


<?php
if (isset($_POST['update_btn'])) {
    $id = $_GET['id'];
    $task_name = $_POST['task_name'];
    $query = "UPDATE `task` SET `task_name` = '$task_name' WHERE `task`.`id` = '$id'";
    $result = mysqli_query($connection, $query);
    if ($result) {
        header("location:view.php?update_msg=Update successfully&id=$id");
    } else {
        die("something went wrong");
    }
}
?>

<form action="update.php?id=<?php echo $id ?>" method="POST">
    <div class="mb-3">
        <label for="task_name" class="form-label">Task Name</label>
        <input type="text" name="task_name" id="task_name" class="form-control" value="<?php echo $row['task_name'] ?>">
    </div>
    <div class="d-flex justify-content-around">
        <a href="view.php?id=<?php echo $id ?>" class="btn btn-secondary w-25">Back</a>
        <input type="submit" value="Update" name="update_btn" class="btn btn-primary w-25">
    </div>
</form>



<?php include "footer.php"; ?>
