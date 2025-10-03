<?php 
include("assets/connection.php");
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Output</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>

<?php   
$sql = "SELECT `id`, `email`, `password` FROM `users`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table class='table table-striped text-center'>";
    echo "
        <tr>
          <th scope='col'>ID</th>
          <th scope='col'>Email</th>
          <th scope='col'>Password</th>
          <th scope='col'>Actions</th>
        </tr>
    ";
    
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";
        echo "<td><a href='update.php?id=" . $row["id"] . "' class='btn btn-primary'>Edit</a>
  <a href='delete.php?id=" . $row["id"] . "' class='btn btn-danger'>Delete</a></td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "
    <script>
        alert('0 result!');
        window.location='index.php';
    </script>";
}
?>

<br>
<div style="text-align: center;">
    <a href="index.php"class='btn btn-primary'>Input again</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>


</body>
</html>
