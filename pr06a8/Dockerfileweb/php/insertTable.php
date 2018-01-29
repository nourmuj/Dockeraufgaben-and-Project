<?php
$servername = "10.0.22.3"; $username = "root"; $password = "netlab"; $dbname= "bigdata";
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
		$id=gethostname();
		$Color =substr($id, 6); 
		$C =  "#" . $Color;
                 $query="insert into activitylog (NumberAccess,Timestamp,HostName,Color,RemoteIP)values( NULL ,FROM_UNIXTIME(1299762201428),'". $HostName ."','". $C ."' , '" .  $RemoteIP ."' )";
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


