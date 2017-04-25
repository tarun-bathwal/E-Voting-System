<?php
	$servername = "localhost";
  $username = "root";
  $password = "";

  $database = "voting";
  

  //--------------------------------------------------------------------------
  // 1) Connect to mysql database
  //--------------------------------------------------------------------------
  $conn = mysqli_connect($servername, $username, $password , $database);
?>