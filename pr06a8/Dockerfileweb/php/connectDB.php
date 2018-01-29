<?php 
$servername = "10.0.22.3";
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

