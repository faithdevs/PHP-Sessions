<?php
//Start Session
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions-PHP</title>
</head>
<body>
  <?php
  echo $_SESSION['username'].' email is '.$_SESSION['email']
  ?>  
</body>
</html>