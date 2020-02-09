<?php
$pattern = array
( array(1,2,3,"A"),
  array(1,2,"B","C"),
  array(1,"D","E","F"),
  );
  
  echo $pattern[0][0]."".$pattern[0][1]."".$pattern[0][2]."<br>";
  echo $pattern[1][0]."".$pattern[1][1]."<br>";
  echo $pattern[2][0]."<br>";

  echo "<br>";


  echo $pattern[0][3]."<br>";
  echo $pattern[1][2]."".$pattern[1][3]."<br>";
  echo $pattern[2][1]."".$pattern[2][2]."".$pattern[2][3]."<br>";

?>


