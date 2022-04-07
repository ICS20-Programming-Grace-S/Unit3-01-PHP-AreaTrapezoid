<!DOCTYPE html>
<html lang="en-ca">
  <head>
    
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My first webpage with user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Grace S">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Area of a Trapezoid in JS</title>
  </head>
  <body>
    
		<!-- PHP echo to print the html to the page -->
    <?php 
			echo "<center><h1>Area of a Trapezoid in JS</h1></center>";
			echo "<center><h3>Dimensions for Trapezoid:</h3><center>";
      echo '<img src= "./images/area-of-trapezoid-formula.svg" alt="Trapezoid" width="55%"     height="auto">';
		?>

		<!-- Buttons and Text Field -->
    <form method= "post">
      Side a <input type="number" name="sideA">
      <br><br>
      Side b <input type="number" name="sideB">
      <br>
      <br>
      Height <input type="number" name="height">
      <br>
      <br>
      <input type= "submit" name="submit" value="Calculate">
    </form>
      <br>

        <!-- Calculations for area -->
        <?php
          if(isset($_POST["submit"])) {
            $sideA = $_POST["sideA"];
            $sideB = $_POST["sideB"];
            $height = $_POST["height"];
            $area = ($sideA+$sideB)*$height/2 ;
            echo "<br><br><h3>The area is " . $area . " cm<sup>2</sup>";
          }
        ?>
      </input>
  </body>
</html>