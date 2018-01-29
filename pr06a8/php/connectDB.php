<?php 
$servername = "10.0.26.5";
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

