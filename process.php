<?php
include("assets/connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 

	if (isset($_POST['submit'])) {
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);

		$sql = "INSERT INTO `users`(`email`, `password`) VALUES ('$email','$password')";

		if (mysqli_query($conn, $sql)) {
			echo '<script>
			alert("Email and password successfully submitted!");
			window.location="output.php";
			</script>';
		} else {
			echo "<script>
			alert('Name and Email unsuccessfully submitted!');
			window.location='index.php';
			</script>";
		}
	}

	?>

	<a href="output.php">View table</a>
</body>
</html>