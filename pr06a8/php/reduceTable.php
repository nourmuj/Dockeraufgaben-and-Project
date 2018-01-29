<?php
$servername = "10.0.26.5";
$username = "root";
$password = "netlab";
$dbname = "bigdata";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql= "SELECT * FROM  activitylog " ;
$result = mysqli_query($conn, $sql);
$num_row=mysqli_num_rows($result);
if ($num_row > 8)
	{
		$delet_row=$num_row - 8;
		$sql1= "DELETE FROM activitylog ORDER BY NumberAccess ASC limit $delet_row " ;
		$result1 = mysqli_query($conn, $sql1);
	}
mysqli_close($conn);
?> 



