<?php
$servername = "10.0.0.7"; $username = "root"; $password = "netlab"; $dbname= "dbprj";
 $connect = mysqli_connect($servername,$username,$password,$dbname);
 if (!$connect)  {
  die("Connection error: " . mysqli_connect_errno());   }
?>
<html>
 <head>
  </head>
   <body>
 <?php
		//$HostName=$_POST['HostName'];
	        $RemoteIP= $_SERVER['REMOTE_ADDR'];
		$id=gethostname();
                //$HostName=$_GET['HostName'];
		//$_COOKIE['varname']=$HostName;
                $query="insert into table1 (orderNumber,serverName,serverAdress)values( NULL ,'". $id ."' , '" .  $RemoteIP ."' )";
      	        $result= mysqli_query($connect,$query);
		// echo $_SERVER['REMOTE_ADDR'];

                 if ( !$result )
		    echo 'Error  in Insert Data';

		//$Cvalue= "#" . substr($id,6);
?>
		<svg height="100" width="100">
  		<circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="<?php echo  $Cvalue= "#" . substr($id,6); ?>" />
		</svg>

 



<body>

          <form action="printTable1.php" >
          <button type="submit" value="Submit">Show DB</button>
         </form>
        </body>

</body>


</body>
 </html>
<?php
 mysqli_close($connect);
?>
