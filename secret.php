<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();

if(isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
}
else {
  header('Location: index.php');
  die();
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Members Only Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <h1>Secret User Page</h1>
    <h3>Welcome, <?php echo "$username" ?></h3>
    <form action="logout.php">
      <input type="submit" value="logout" />
    </form>
  </body>
</html>