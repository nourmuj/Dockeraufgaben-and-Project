<!DOCTYPE html>
<html lang="en">
<head>
  <title> Project </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <script src="js/script.js"></script>
    <link rel="stylesheet" href="css/sheet.css">
</head>
<body>


<header class="imgb">
        <div class="container">
        <h1> Restaurant </h1>
</div>
</header>
<br><br>

<h3> <p align="left"> Information  </p></h3> 

<?php
$servername = "10.0.0.3"; $username = "root"; $password = "netlab"; $dbname= "restaurant";
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
//if (isset($_POST['Submit'])) {
$meal = $_GET['meal'];
$price = "0$";
if ($meal == "Burger") {
$price ="10$";
}
else if ($meal == "Chicken") {
$price ="13$";
}
else if ($meal == "Doener") {
$price ="5$";
}
else if ($meal == "Beef") {
$price ="9$";
}
else if ($meal == "Full Burger") {
$price ="15$";
}
else if ($meal == "Pizza") {
$price ="14$";
}
		//$HostName=$_POST['HostName'];
	        $RemoteIP= $_SERVER['REMOTE_ADDR'];
		$id=gethostname();
                //$HostName=$_GET['HostName'];
		//$_COOKIE['varname']=$HostName;
                $query="insert into meals (orderNumber,mealName,price,orderTime,deleveryTime,clientName,clientAdress)values( NULL ,'". $meal ."','". $price ."',FROM_UNIXTIME(1299762201428),'15 minuts','". $id ."' , '" .  $RemoteIP ."' )";
   	        $result= mysqli_query($connect,$query);
		// echo $_SERVER['REMOTE_ADDR'];
		$last_id = mysqli_insert_id($connect);
	        //echo "New record created successfully. Last inserted ID is: " . $last_id;
		$Cvalue= "#" . substr($id,6);
		$bgColor = ' style="background-color: ' .$Cvalue . ';" ';
	if ( !$result  )
                    echo 'Error  in Insert Data';



 ?>
	
        <h4> Your Order_ID: <?php echo $last_id ; ?> </h4>
         <h4> Your Meal: <?php echo  $meal; ?>  </h4>
         <h4> Meal Price: <?php echo   $price; ?> <h4>
         <h4> Wating Time=15 Min  </h4>
	<br>	


<body>

          <form action="showdb.php" >
          <button type="submit" value="Submit">Show DB</button>
         </form>
        </body>

</body>


</body>
 </html>
<?php
 mysqli_close($connect);
?>



