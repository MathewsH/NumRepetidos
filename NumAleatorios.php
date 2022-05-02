<?php
    $Array = [];
    $Nrepetidos =[];
    $count=0;
    
    for($x=0;$x<20;$x++){
        $num = random_int(1,10);
		if($num<=10){
        array_push($Array, $num);
		}	
    }
    for($y=0;$y<20;$y++){
        $count=0;
        for($j=0;$j<20;$j++){
            if($y!=$j){
                if($Array[$y]==$Array[$j]){
                    $count++;
                }
            }
            
        }
        if($count==0){
            array_push($Nrepetidos,$Array[$y]);
        }
    }
    $sorteado =implode(",",$Array);
    $Num= implode(",",$Nrepetidos);
	echo "\nOs numeros sorteados são:";
	echo "\n";
    echo "$sorteado \n";
	
	echo "Os numeros que não se repetem são:";
    
	echo $Num;