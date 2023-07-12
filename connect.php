<?php
  $hostname = "epiz_33946603";
  $username = "sql106.epizy.com";
  $password = "sapjames1997";
  $dbname = "portfolio";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
