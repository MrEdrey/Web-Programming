<?php
$divisor = 0;
$dividend = 0;

fscanf(STDIN,"%f", $value);

while($value > 0){
    if ($value > 0){
        $divisor += 1;
        $dividend += $value;
    }fscanf(STDIN,"%f", $value);
}if ($divisor <= 0){
    echo "No natural values were provided!";
}else{
    echo number_format($dividend/$divisor, 1);
}
?>