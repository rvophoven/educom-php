<!DOCTYPE html>
<html>
<body>
  <?php
  /// ..........PHP syntax............
  /// Exercise 1
  echo "Hello World";
  /// Exercise 2
  echo "This is PHP";
  /// Exercise 3
  //This is a single-line comment
  /// Exercise 4
  /*This is a
  multi-line
  comment*/
  /// Exercise 5
  echo "Hello World";

  echo"<br>";
  /// ..........PHP Variables............
  /// Exercise 1
  $txt = "Hello";
  /// Exercise 2
  $x = 5;
  $y = 7;
  echo $x + $y; 

  echo"<br>";
  /// ..........PHP Strings............
  /// Exercise 1
  echo strlen("Hello world");
  /// Exrecise 2
  echo strrev("Hello world");
  /// Exercise 3
  $oldtxt = "Hello world";
  $newtxt = str_replace("world", "dolly",$oldtxt);
  echo $newtxt; 

  echo"<br>";
  /// ..........PHP Operators............
  /// Exercise 1
  echo 10*5;
  /// Exercise 2
  echo 10/2;
  /// Exercise 3
  $a = 5;
  $b = 6;
  var_dump($a == $b);
  /// Exercise 4
  var_dump($a != $b);

  echo"<br>";
  /// ..........PHP if... else............
  /// Exercise 1
  $a = 50;
  $b = 10;
  if ($a > $b){
    echo "Hello world";
  }
  /// Exercise 2
  if ($a != $b){
    echo "Hello world";
  }
  /// Exercise 3
  if ($a == $b){
    echo "Yes";
  }else{
    echo "No";
  }
  /// Exercise 4
  if ($a == $b){
    echo "1";
  }elseif( $a > $b){
    echo "2";
  }else{
    echo "3";
  }

  echo"<br>";
  /// ..........PHP switch............
  /// Exercise 1
  $color = "green";
  switch($color){
    case "red":
      echo "hello";
      break;
    case "green":
      echo "welkom";
      break;
  }
  /// Exercise 2
  switch($color){
    case "red":
      echo "hello";
      break;
    case "green":
      echo "welkom";
      break;
    default:
    echo "neither";
  }

  echo"<br>";
  /// ..........PHP loops............
  /// Exercise 1
  $i = 1;
  while($i<6){
    echo $i;
    $i++;
  }
  /// Exercise 2
  $i = 1;
  do{
    echo $i;
    $i++;
  }while($i<6);
  /// Exercise 3
  for($i=0;$i<10;$i++){
    echo $i;
  }
  /// Exercise 4
  $colors = array("red", "green", "blue", "yellow");
  foreach($colors as $x){
    echo $x;
  }

  echo"<br>";
  /// ..........PHP function............
  /// Exercise 1
  function myFunction() {
    echo "Hello world";
  }
  /// Exercise 2
  myFunction();
  /// Exercise 3
  function myFunction2($fname, $lname) {
    echo $fname;
  } 
  myFunction2("First", "Last");
  /// Exercise 4
  function myFunction3($fname, $lname) {
    return $lname;
  }
  echo myFunction3("First", "Last");

  echo"<br>";
  /// ..........PHP arrays............
  /// Exercise 1
  $fruits = array("Apple", "Banana", "Orange");
  echo count($fruits);
  /// Exercise 2
  echo $fruits[1];
  /// Exercise 3
  $age = array("peter"=>"35", "ben"=>"37", "joe"=>"43");
  /// Exercise 4
  echo "ben is" .$age['peter']. "years old.";
  /// Exercise 5
  foreach($age as $z => $z_value){
    echo "key=" .$z. ",value=" .$z_value ;
  }
  /// Exercise 6
  $colors2 = array("red", "green", "blue", "yellow");
  sort($colors2);
  /// Exercise 7
  rsort($colors2);
  /// Exercise 8
  asort($age); 

  ?>
</body>
</html>