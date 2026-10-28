<?php
include "db.php";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$qualification = $_POST['qualification'];
$experience = $_POST['experience'];
$job = $_POST['job_position'];
$address = $_POST['address'];

$sql = "INSERT INTO applicants
(name, email, phone, qualification, experience, job_position, address)
VALUES
('$name', '$email', '$phone', '$qualification', '$experience', '$job', '$address')";

if (mysqli_query($conn, $sql)) {
    header("Location: view.php");
} else {
    echo "Data not saved";
}
?>