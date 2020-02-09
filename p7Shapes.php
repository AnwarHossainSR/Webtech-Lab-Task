<?php
  
echo " Star pattern formate <br>";

for($i=0;$i<3;$i++)
{
  for($j=0;$j<=$i;$j++)
  {
    echo "*";
  }
  echo "<br>";
}





echo " Number pattern formate <br>";

for($i=3;$i>0;$i--)
{
  for($j=1;$j<=$i;$j++)
  {
    echo $j;
  }
  echo "<br>";
}




echo " Alphabet pattern formate <br>";

    $num = 65; 
    for ($i = 0; $i < 3; $i++) 
    { 
        for ($j = 0; $j <= $i; $j++ ) 
        { 
            $ch = chr($num); 
            echo $ch," "; 
            $num = $num + 1; 
        } 
        echo "<br>"; 
    } 

  
      
?> 



