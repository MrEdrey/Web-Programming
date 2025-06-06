<?php
$multiplier = 2;
    
fscanf (STDIN, "%f", $a);
fscanf (STDIN, "%f", $b);

if ($a>=$b){
    $value1 = $a;
    $value2 = $b;
}else{
    $value1 = $b;
    $value2 = $a;
}if ($value1 % $value2 == 0) {
    echo $value1 . "\n";
}else{
    while(true){
        if ($value1*$multiplier % $value2 == 0){
            echo $value1*$multiplier . "\n";
            break;
        }$multiplier += 1;
    }
}
?>