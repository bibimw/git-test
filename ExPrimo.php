<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>
<?php

    $n=0;
    $x=7;
    for ($i=1;$i<=$x;$i++){
      if (($x%$i)==0) $n++;
    }
    if ($n<=2){  
      echo "O numero é primo.";
    }
    else{
      echo "O número não é primo.";
    }
    
?>
    
    
    
    
    
    <?php
     //exercício Fibonacci
    
        $n1=0;
        $n2=1;
        for ($n3=0; $n3<9; $n3++){
            $n2=$n2+$n1;
            $n1=$n2-$n1;
            echo $n1.",";
        }
    
    ?>
</html>