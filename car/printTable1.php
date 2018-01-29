<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<header>
</header>

 <?php
$servername = "10.0.0.7";
$username = "root";
$password = "netlab";
$dbname = "dbprj";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//$HostName=$_GET['HostName'];
//echo $HostName;


//$sql= "SELECT * FROM  meals  WHERE clientAdress='$HostName' order by orderNumber  desc LIMIT 1 " ;
$sql= "SELECT * FROM  table1  order by orderNumber  desc LIMIT 200 " ;
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
         // output data of each row

      echo "<table border='1' cellpadding='10'>";
      echo "<tr><th>orderNumber</th><th>serverName</th> <th>serverAdress </th></tr>";
      while($row = mysqli_fetch_assoc($result))
	{
	$Cvalue= "#" . substr($row["serverName"],6);
	$bgColor = ' style="background-color: ' .$Cvalue . ';" ';
   echo "<tr>";
	echo "<td ".$bgColor .">" . $row["orderNumber"] . "</td>" ;
	echo "<td ".$bgColor .">" . $row["serverName"] . "</td>" ;
	echo "<td ".$bgColor .">" . $row["serverAdress"] . "</td>" ;
        echo "</tr>";
	}
	echo " </table>";

}
 else {
    echo "0 results";
}


mysqli_close($conn);
?>




