<?php 
            echo "<table width='0' border='1'> 
                <tr>
                    <td><b>ID</td>   
                    <td><b>NOME</td> 
                    <td><b>DESC</td>
                </tr>";
                    
            for($i = 1; $i<7; $i = $i + 1){ 
                echo "
                    <tr> 
                        <td>id</td>   
                        <td>nome</td> 
                        <td>desc</td> 
                    </tr> 
                "; 
            } 
            echo "</table>";
?>
