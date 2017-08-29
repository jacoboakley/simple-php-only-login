<?php

error_reporting(E_ALL ^ E_NOTICE);
session_start();

if($_POST['submit']) {
  $member_username = "fred";
  $member_password = "password";

  $username = $_POST['username'];
  $username = strtolower($username);
  $password = $_POST['password'];

  if($username == $member_username && $password == $member_password) {
    $_SESSION['username'] = $username;
    header('Location: secret.php');
  }
  else {
    echo "Incorrect username or pw. Please try again...unless you are a hacker...then go home";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Simple PHP Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <h1>Simple PHP Only Login System</h1>
    <form action="index.php" method="POST">
      <input type="text" name="username" placeholder="Username" /><br />
      <input type="password" name="password" placeholder="Password" /><br />
      <input type="submit" name="submit" value="Login" />
    </form>
  </body>
</html>