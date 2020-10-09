<?php
$host = "127.0.0.1";
$user = "root";
//$pass = "999999";
$dbname = "movie";
$con = mysqli_connect($host, $user, $pass, $dbname);
 mysqli_query($con,"set  char set utf8 ");


?>