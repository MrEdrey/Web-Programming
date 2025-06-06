<?php
$divisor = 0;
$dividend = 0;

fscanf(STDIN,"%f", $v1);
if ($v1 >= 0){
    $divisor = ($divisor + 1);
    $dividend = ($dividend + $v1);
}fscanf(STDIN,"%f", $v1);
if ($v1 >= 0){
    $divisor = ($divisor + 1);
    $dividend = ($dividend + $v1);
}fscanf(STDIN,"%f", $v1);
if ($v1 >= 0){
    $divisor = ($divisor + 1);
    $dividend = ($dividend + $v1);
}fscanf(STDIN,"%f", $v1);
if ($v1 >= 0){
    $divisor = ($divisor + 1);
    $dividend = ($dividend + $v1);
}fscanf(STDIN,"%f", $v1);
if ($v1 >= 0){
    $divisor = ($divisor + 1);
    $dividend = ($dividend + $v1);
}fscanf(STDIN,"%f", $v1);
if ($v1 >= 0){
    $divisor = ($divisor + 1);
    $dividend = ($dividend + $v1);
}fscanf(STDIN,"%f", $v1);
if ($v1 >= 0){
    $divisor = ($divisor + 1);
    $dividend = ($dividend + $v1);
}fscanf(STDIN,"%f", $v1);
if ($v1 >= 0){
    $divisor = ($divisor + 1);
    $dividend = ($dividend + $v1);
}if ($divisor <= 0){
    echo "No natural values ​​were provided!";
}else{
    echo number_format($dividend/$divisor, 1);
}
?>