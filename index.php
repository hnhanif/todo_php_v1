<?php include "header.php";
global $connection;
include "db_con.php";

$query = "SELECT * FROM task ORDER BY id DESC";
$result = mysqli_query($connection, $query);
?>
<ul class="list-group custom-list">
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <a href="view.php?id=<?php echo $row['id'] ?>"
           class="list-group-item list-group-item-action"><?php echo $row['task_name'] ?></a>
        <?php
    } ?>
</ul>

<?php
if (isset($_GET['complete_msg'])) {
    echo "<h5 class='text-center text-success'>" . $_GET['complete_msg'] . "</h5>";
}if (isset($_GET['add_msg'])) {
    echo "<h5 class='text-center text-success'>" . $_GET['add_msg'] . "</h5>";
}
?>

<?php include "footer.php" ?>
