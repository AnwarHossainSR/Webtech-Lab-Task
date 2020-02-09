<?php
  
 $a="Red";
 $b="Black";
 $arr= array("Green","White","Red","Yellow","Blue");
  function search($x , $arr)
  {
  	$arrlength = count($arr);
	 for($i=0;$i<$arrlength;$i++)
	 {
	  if($x == $arr[$i])
	  {
	      echo $x," is found at : ",$i,"<br>";
    }
     
     }
  } 
  
  
  search($a,$arr);
  search($b,$arr);


?>


