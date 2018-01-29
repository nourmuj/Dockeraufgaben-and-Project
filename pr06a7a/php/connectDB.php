<?php
$servername = "172.18.0.2";
$username = "root";
$password = "netlab";
$dbname= "bigdata";
//Step1
 $connect = mysqli_connect($servername,$username,$password,$dbname);
 if (!$connect)
  {
  die("Connection error: " . mysqli_connect_errno());
  }
?>

<html>
 <head>
 </head>
 <body>
</body>
</html>
<?php 

 mysqli_close($connect);
?>

