<?php 
  session_start();

  $first_name = $_SESSION["first_name"];
?>

<!DOCTYPE HTML>
<html>
   <head>
     <title>Periood-2-prakikum-9-teine</title>
	 <meta charset="UTF-8">
	 </head>
   <body>

      <pre><?php print_r($_SESSION); ?></pre>
      <br>
      <?php echo $first_name; ?>
      <a href="index.php">Esimesele lehele</a>

   </body>

</html>