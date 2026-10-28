<?php
include "db.php";

$id = (int) $_GET["id"];

$result = mysqli_query(
    $conn,
    "SELECT * FROM applicants WHERE id = $id"
);

$row = mysqli_fetch_assoc($result);

if (!$row) {
    die("Application not found.");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Application</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Edit Application</h1>

    <form action="update.php" method="post">

        <input type="hidden" name="id"
               value="<?php echo $row['id']; ?>">

        <label>Full Name</label>
        <input type="text" name="name"
               value="<?php echo htmlspecialchars($row['name']); ?>" required>

        <label>Email</label>
        <input type="email" name="email"
               value="<?php echo htmlspecialchars($row['email']); ?>" required>

        <label>Phone</label>
        <input type="text" name="phone"
               value="<?php echo htmlspecialchars($row['phone']); ?>" required>

        <label>Qualification</label>
        <input type="text" name="qualification"
               value="<?php echo htmlspecialchars($row['qualification']); ?>" required>

        <label>Experience</label>
        <input type="text" name="experience"
               value="<?php echo htmlspecialchars($row['experience']); ?>">

        <label>Job Position</label>
        <input type="text" name="job_position"
               value="<?php echo htmlspecialchars($row['job_position']); ?>" required>

        <label>Address</label>
        <textarea name="address"><?php echo htmlspecialchars($row['address']); ?></textarea>

        <label>Status</label>
        <select name="status">
            <option value="Pending">Pending</option>
            <option value="Approved">Approved</option>
            <option value="Rejected">Rejected</option>
        </select>

        <button type="submit">Update Application</button>

    </form>
</div>

</body>
</html>