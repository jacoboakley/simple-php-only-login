<?php 
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Logout</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    You are logged Out. <br />

    <a href="index.php">Click here to log back in.</a>
  </body>
</html>