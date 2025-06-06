<?php
$rectangle = 0;

fscanf(STDIN, "%d", $data);

while ($data > 0){
    fscanf(STDIN, "%f%d", $size, $amount);
    $rectangle += intval($amount / 2);
    $data -= 1;
}
echo intval($rectangle/2);
?>