<?php session_start(); ?>
<?php 
  //$_SESSION["first_name"] = "Aile"; 
  //$_SESSION["last_name"] = "Orgla"; 
  //$_SESSION["email"] = "aile.orgla@khk.ee"; 
?>

<!DOCTYPE HTML>
<html>
   <head>
     <title>Periood-2-prakikum-9</title>
	 <meta charset="UTF-8">
	 </head>
   <body>

      <pre><?php print_r($_SESSION); ?></pre>
      <a href="teine.php">Teisele lehele</a>

   </body>

</html>