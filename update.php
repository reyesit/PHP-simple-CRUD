<?php
include("assets/connection.php");

$id = $_GET['id']; // kukunin yung ID galing sa URL

// Kunin current data ng user
$sql = "SELECT `email`, `password` FROM `users` WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $updateQuery = "UPDATE `users` SET `email`='$email',`password`='$password' WHERE id='$id'";
    mysqli_query($conn, $updateQuery);

    if ($updateQuery == TRUE) {
        echo '<script>
        alert("The data updated!");
        window.location = "output.php"; // balik sa table page 
        </script>';       
    }


    
    
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update User</title>
</head>
<body>
    <h2>Update User</h2>
    <form method="POST">
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
        Password: <input type="password" name="password" value="<?php echo $row['password']; ?>">
        <br><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
