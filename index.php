<?php
include("assets/connection.php");
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Php POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    
    <form action="process.php" method="POST">
      <div class="mx-auto p-2 my-3" style="width: 300px;">
        <label class="form-label">Email address</label>
        <input type="email"  name="email" class="form-control" required>
      </div>
      <div class="mx-auto my-3 p-2" style="width: 300px;">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>
      <button type="submit" name="submit" class="btn btn-primary d-grid col-6 mx-auto my-3" style="width: 300px;">Submit</button>
      <a href="output.php" class='btn btn-info d-grid col-6 mx-auto my-3' style="width: 300px;">View Table</a>
    </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>
</html>
