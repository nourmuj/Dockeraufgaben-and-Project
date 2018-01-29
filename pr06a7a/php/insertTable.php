<?php
$servername = "172.18.0.2"; $username = "root"; $password = "netlab"; $dbname= "bigdata";
 $connect = mysqli_connect($servername,$username,$password,$dbname);
 if (!$connect)  {
  die("Connection error: " . mysqli_connect_errno());   }
?>
<html>
 <head>
  </head>
   <body>
    <?php
   	 //Insert into DB
                $HostName= "Web_seite1";
		//$HostName=$_POST['HostName'];
		$RemoteIP= $_SERVER['REMOTE_ADDR'];
		$Color = array( '#D0F5A9' => 'Web_seite1' ); 
		$Cvalue =array_search("$HostName",$Color);
                 $query="insert into activitylog (NumberAccess,Timestamp,HostName,Color,RemoteIP)values( NULL ,FROM_UNIXTIME(1299762201428),'". $HostName ."','". $Cvalue ."', '" .  $RemoteIP ."' )";
                 $result= mysqli_query($connect,$query);
		// echo $_SERVER['REMOTE_ADDR'];
                 if ( !$result )
		    echo 'Error  in Insert Data';   
    ?>
</body>
 </html>
<?php
 mysqli_close($connect);
?>


