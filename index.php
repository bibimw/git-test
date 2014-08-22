<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
    $p1=8;
    $m1=7;
    $m2=8;
    $proj1=9;
    $proj2=8;
    $proj3=7;
    $proj4=6;
    $trabF=8;
    $proc=6;
    $pf=9;
    $mf=0;
    $mi=(30*$p1 + 10*$m1 + 10*$m2 + 5*$proj1 + 5*$proj2 + 5*$proj3 + 5*$proj4 + 10*$trabF + 20*$proc)/100;
    
    if ($mi >=7.5){
	$mf == $mi;
	echo "Aprovado sem Prova Final,Parabens!!! Boas ferias";
    }

    else {
	$mf=($pf + $mi)/2;

    if ($mf >=5.0){
	echo "Aprovado com Prova Final, Agora já pode descansar tranquilo.";
    }

    else { 
	echo " Reprovado,não foi dessa vez. Ano que vem tem mais TWII";
	echo " <p> Media Intermediaria: $mi, Media Final: $mf </p>";
	
	}
}

?>
    </body>
</html>
