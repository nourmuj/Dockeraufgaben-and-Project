 <?php
$servername = "172.18.0.2";
$username = "root";
$password = "netlab";
$dbname = "bigdata";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql= "SELECT * FROM  activitylog  order by NumberAccess  desc" ;
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
         // output data of each row
      echo "<table border='1' cellpadding='10'>";
      echo "<tr><th>NumberAccess</th><th>Timestamp</th><th>HostName</th>  <th>Color</th><th>RemoteIP</th> </tr>";
      while($row = mysqli_fetch_assoc($result)) 
	{
	$Cvalue=$row["Color"];
	$bgColor = ' style="background-color: ' .$Cvalue . ';" ';
   echo "<tr>";
	echo "<td ".$bgColor .">" . $row["NumberAccess"] . "</td>" ;
	echo "<td ".$bgColor .">" . $row["Timestamp"] . "</td>" ;
	echo "<td ".$bgColor .">" . $row["HostName"] . "</td>" ;
	echo "<td ".$bgColor .">" . $row["Color"] . "</td>" ;
	echo "<td ".$bgColor .">" . $row["RemoteIP"] . "</td>" ;
    echo "</tr>";
	}
	echo "</table>";
}
 else {
    echo "0 results";
}
mysqli_close($conn);
?> 
