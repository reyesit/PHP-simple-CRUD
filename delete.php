<?php
include("assets/connection.php");

$id = $_GET['id'];

$sql = "DELETE FROM users WHERE id='$id'";
mysqli_query($conn, $sql);

if ($sql == TRUE) {
	echo "<script>
			alert('Data has been deleted successfully!');
			window.location='output.php';
		</script>";
}
exit;
?>
