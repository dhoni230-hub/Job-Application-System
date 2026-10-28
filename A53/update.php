<?php
include "db.php";

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$qualification = $_POST['qualification'];
$experience = $_POST['experience'];
$job = $_POST['job_position'];
$address = $_POST['address'];
$status = $_POST['status'];

$sql = "UPDATE applicants SET
name='$name',
email='$email',
phone='$phone',
qualification='$qualification',
experience='$experience',
job_position='$job',
address='$address',
status='$status'
WHERE id='$id'";

if (mysqli_query($conn, $sql)) {
    header("Location: view.php");
} else {
    echo "Data not updated";
}
?>