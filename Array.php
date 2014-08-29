<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>

<?php

$turmas [0] = "02K01";
$turmas [1] = "02J01";
$turmas [2] = "02K01";

$disciplinas [0] = "Tecnologia Web II";
$disciplinas [1] = "Linguagem de Programação I";
$disciplinas [2] = "Linguagem de Programação I";

$semana [0] = "Segunda";
$semana [1] = "Terça";
$semana [2] = "Quarta";
  
$professores [0] = "Charles";
$professores [1] = "João"; 
$professores [2] = "Charles"; 
   

 echo "<table width='0' border='1'> 
                <tr>
                    <td><b>Turma</td>   
                    <td><b>Disciplina</td> 
                    <td><b>Semana</td>
                    <td><b>Professor</td>
                </tr>";
                    
            for($i = 0; $i<3; $i = $i + 1){ 
                echo "
                    <tr> 
                        <td>$turmas[$i]</td>   
                        <td>$disciplinas[$i]</td> 
                        <td>$semana[$i]</td> 
                        <td>$professores[$i]</td> 
                    </tr> 
                "; 
            } 
            echo "</table>";

?>

    
</html>