<?php include "header.php";
include "db_con.php";
global $connection;
?>

<?php
$id = $_GET['id'];
$query = "SELECT * FROM task WHERE id='$id'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
$_task = $row['task_name'];

if (isset($_POST['completed_btn'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM task WHERE id='$id'";
    $result = mysqli_query($connection, $query);
    if ($result) {
        header("location:index.php?complete_msg=$_task complete Successful");
    } else {
        die("something went wrong");
    }
}

?>
<form action="complete.php?id=<?php echo $id ?>" method="POST" class="d-flex justify-content-between my-5">
    <h4 class="text-center text-secondary">Is your <?php var_export($row['task_name']) ?> task is complete?</h4>
    <div class="btn-wrapper">
        <a href="view.php?id=<?php echo $id ?>" class="btn btn-secondary mx-3">Back</a>
        <input type="submit" value="Complete" class="btn btn-danger" name="completed_btn">
    </div>
</form>

<?php include "footer.php"; ?>
