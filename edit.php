<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $course = $_POST['course'];

    $conn->query("UPDATE students 
                  SET name='$name', email='$email',
                      mobile='$mobile', course='$course'
                  WHERE id=$id");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>

<h2>Edit Student</h2>

<form method="POST">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br><br>
    Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
    Mobile: <input type="text" name="mobile" value="<?php echo $row['mobile']; ?>" required><br><br>
    Course: <input type="text" name="course" value="<?php echo $row['course']; ?>" required><br><br>

    <button type="submit" name="update">Update</button>
</form>

</body>
</html>
