<!DOCTYPE html>
<html lang="en">
<head>
  <title> project </title>
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
	<h1>Restaurant </h1>
</div>
</header>

<body>
<header class="bgimage">
  <div class="container">
 <br>  
</div>
</header>

<div class="container items">
   <div class="row">

    <div class="col-lg-4">
          <img   src="images/burger.jpg" class="img-circle myimg" alt="Cinque Terre"  >
      <h3>Burger</h3>
      <p>Burger Sandwish</p>
      
    </div>

-    <div class="col-lg-4">
         <img   src="images/Fast-Food.jpg" class="img-circle myimg" alt="Cinque Terre"  >
      <h3>Doener</h3>
      <p>Doener Teler mit Fleish</p>
    </div>

    <div class="col-lg-4">
        <img   src="images/fastfood-diet.jpg" class="img-circle myimg" alt="Cinque Terre"  >
      <h3>Full Burger</h3>
      <p>Full Burger mit Pomes und Kola</p>
    </div>
      <div class="col-lg-4">
          <img   src="images/chiken.jpeg" class="img-circle myimg" alt="Cinque Terre"  >
      <h3>Chiken</h3>
      <p>Chiken mit Riese und Suppe</p>
     
    </div>

    <div class="col-lg-4">
         <img   src="images/beef.jpeg" class="img-circle myimg" alt="Cinque Terre"  >
      <h3>Beef</h3>
      <p> Beef mit Sppe und Pommes und Rise</p>
      
   </div>

    <div class="col-lg-4">
        <img   src="images/pica.jpg" class="img-circle myimg" alt="Cinque Terre"  >
      <h3>Pizza</h3>
      <p>Pizza Tuna mit Kola</p>

    </div>

</div>
</br>
</br>
 <h3>select your meal</h3>

 <form action=' inserttable.php' >

  <select name="meal">
    <option value="Burger">Burger</option>
    <option value="Chicken">Chicken</option>
    <option value="Doener">Doener</option>
    <option value="Beef">Beef</option>
    <option value="Full Burger">Full Burger</option>
    <option value="Pizza">Pizza</option>
  </select>
   <br><br>
   <!-- First name: <input type="text" name="HostName" ><br> -->

   <br>
  <input type="submit"  value="Send" >
</form>

</br>
</body>
</div>
</body>
</html>
