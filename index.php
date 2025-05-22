<?php
session_start();


  if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true){
    header("Location: /login.php");
    exit();  
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Dhriti</title>
  </head>
  <body>
    <h1>Assignment 1</h1>
    <p>Welcome, <?= $_SESSION['username'] ?></p>
<p>Today's date is: <?= date("l, F j, Y") ?></p>
    

  </body>

  <footer> 
  <p><a href="/logout.php"> Click here to logout </a></p>
  </footer>
</html>