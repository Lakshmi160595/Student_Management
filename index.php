<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
    <style>
        body { font-family: Arial; }
        table { border-collapse: collapse; width: 80%; margin: auto; }
        th, td { padding: 8px; border: 1px solid #ccc; text-align: center; }
        th { background: #007bff; color: white; }
        a { text-decoration: none; padding: 5px 10px; }
        .add { background: green; color: white; }
        .edit { background: orange; color: white; }
        .delete { background: red; color: white; }
    </style>
</head>
<body>

<h2 align="center">Student Management</h2>
<div align="center">
    <a class="add" href="add.php">Add Student</a>
</div>

<br>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Course</th>
        <th>Actions</th>
    </tr>

<?php
$result = $conn->query("SELECT * FROM students");

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['mobile']}</td>
        <td>{$row['course']}</td>
        <td>
            <a class='edit' href='edit.php?id={$row['id']}'>Edit</a>
            <a class='delete' href='delete.php?id={$row['id']}'>Delete</a>
        </td>
    </tr>";
}
?>
</table>

</body>
</html>
