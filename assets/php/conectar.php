<?php
  $username = "root";
  $password = "";
  $database = "quest";
  $servername = "localhost";
  $strcon = mysqli_connect($servername, $username, $password, $database);
  if(!$strcon){
    die("Falha na conexão: " . mysqli_connect_error()); 
  }
?>