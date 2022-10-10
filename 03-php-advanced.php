<!DOCTYPE html>
<html>
  <head>
    
  </head>
  <body> 
  <?php
  /// ..........PHP Dates............
  /// Exercise 1 -->
  echo date("l");
  /// Exercise 2 -->
  echo date("Y.m.d.");
  /// Exercise 3 -->
  echo date("H:i:s");
  ?>
  <!-- ..........PHP Advanced............
  /// Exercise 1 
  <?php include 'footer.php' ;?>
  /// Exercise 2 
  <?php echo readfile("webdict.txt");?>
  /// Exercise 3
  <?php $myfile = fopen("webdict.txt", "r");
  while(!feof($myfile)){
    echo fgetc($myfile);
  }
  ?>
  /// Exercise 4
  set("username", "John", time() + (86400 * 30), "/"); ///set before html
  /// Exercise 5
  session_start();
  $_SESSION["favcolor"] = "green";
  /// Exercise 6 
  echo $_SESSION["favcolor"];
  -->
  </body>
  </html>