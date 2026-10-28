<?php
include "db.php";

$result = mysqli_query($conn, "SELECT * FROM applicants ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Applications</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Job Applications</h1>

    <p><a href="index.php">Apply for Job</a></p>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Qualification</th>
            <th>Experience</th>
            <th>Job</th>
            <th>Address</th>
            <th>Status</th>
            <th colspan="2">Action</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo htmlspecialchars($row["name"]); ?></td>
            <td><?php echo htmlspecialchars($row["email"]); ?></td>
            <td><?php echo htmlspecialchars($row["phone"]); ?></td>
            <td><?php echo htmlspecialchars($row["qualification"]); ?></td>
            <td><?php echo htmlspecialchars($row["experience"]); ?></td>
            <td><?php echo htmlspecialchars($row["job_position"]); ?></td>
            <td><?php echo htmlspecialchars($row["address"]); ?></td>
            <td><?php echo htmlspecialchars($row["status"]); ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                </td>
               <td> <a href="delete.php?id=<?php echo $row['id']; ?>"
                   onclick="return confirm('Delete this application?')">
                   Delete
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>