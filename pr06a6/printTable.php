<html>
 <head>
 </head>
 <body>
 <h1> PRINT MySQL</h> 
	<?php 
		$db = new mysqli("172.16.238.2", "root", "netlab", "bigdata");
 	?>
	<table border="1">
	<tr>
		<td>NumberAccess</td>
		<td>Timestamp</td>
		<td>HostName</td>
		<td>Color</td>
		<td>RemoteIP</td>
	</tr>


	<tr>
		<?php 
    			$sql = "SELECT * FROM activitylog";
    			$result= mysqli_query($db,$sql);
    			while($row = mysqli_fetch_assoc($result)) {
			</br>
        	
       			 <td><?php echo $row['NumberAccess']; ?></td>
    		         <td><?php echo $row['Timestamp']; ?></td>
	       		 <td><?php echo $row['HostName']; ?></td>
			 <td><?php echo $row['Color']; ?></td>
		 	 <td><?php echo $row['RemoteIP']; ?></td>
		  	</br>
        
    			}
 		?>		
</tr>
</table>



</body>
</html>


<?php 
	
 mysqli_close($connect);
?>
