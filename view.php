<?php include "header.php";
include "db_con.php";
global $connection;
?>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM task Where id='$id'";
    $result = mysqli_query($connection, $query);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        ?>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['task_name'] ?></h5>
                <a href="index.php" class="card-link">Back</a>
                <a href="update.php?id=<?php echo $id ?>" class="card-link">Update</a>
                <a href="complete.php?id=<?php echo $id ?>" class="card-link">completed</a>
            </div>
        </div>

        <?php
    } else {
        echo "something went wrong";
    }
}
?>

<?php
if (isset($_GET['update_msg'])) {
    echo "<h5 class='text-center text-success'>" . $_GET['update_msg'] . "</h5>";
}
?>

<?php include "footer.php" ?>
