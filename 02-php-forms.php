<!DOCTYPE html>
<html>
  <head>
    
  </head>
  <body>
    
    <!-- ..........PHP Forms............
    /// Exercise 1 -->
    <form action="02-php-forms.php" method="get">
    First name: <input type="text" name="fname">
    </form>
    Welcome <?php echo $_GET["fname"]; ?> <!--type name en press enter to see fname -->
    <!-- Exercise 2-->
    <form action="02-php-forms.php" method="post">
    Last name: <input type="text" name="lname">
    </form>
    Welcome <?php echo $_POST["lname"]; ?> <!--type name en press enter to see lname -->
  </body>
</html>