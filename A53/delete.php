<?php
include "db.php";

$id = $_GET['id'];

$sql = "DELETE FROM applicants WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: view.php");
} else {
    echo "Data not deleted";
}
?>