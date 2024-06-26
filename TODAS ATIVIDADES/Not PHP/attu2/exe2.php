<?php 

function ordenar($x, $y, $z){
if($x < $y && $x < $z){
    echo "$x\n";
    if($y < $z){
        echo "$y\n$z";
    }else{
        echo "$z\n$y";
    }
}else if($y < $x && $y < $z){
    echo "$y\n";
    if($x < $z){
        echo "$x\n$z";
    }else{
        echo "$z\n$x";
    }
}else {echo "$z\n";
    if($x < $y){
        echo "$x\n$y";
    }else{
        echo "$y\n$x";
    }
}
}
$x = 2;
$y = 1;
$z = 3;
ordenar($x, $y, $z);
    
    
    
?>