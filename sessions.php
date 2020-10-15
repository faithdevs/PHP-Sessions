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
  //Set Session Vars
  $_SESSION['username'] = 'Faithdevs';
  $_SESSION['email'] = 'ugbeshefaith@gmail.com';
  echo 'session vars set';
  ?>  
</body>
</html>