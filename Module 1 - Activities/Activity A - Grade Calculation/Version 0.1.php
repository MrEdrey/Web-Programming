<?php
fscanf(STDIN,"%f",$grade1);
fscanf(STDIN,"%f",$weight1);

fscanf(STDIN,"%f",$grade2);
fscanf(STDIN,"%f",$weight2);

fscanf(STDIN,"%f",$grade3);
fscanf(STDIN,"%f",$weight3);

fscanf(STDIN,"%f",$grade4);
fscanf(STDIN,"%f",$weight4);

$dividend = (($grade1 * $weight1) + ($grade2 * $weight2) + ($grade3 * $weight3) + ($grade4 * $weight4));
$divisor = ($weight1 + $weight2 + $weight3 + $weight4);
$media = ($dividend / $divisor);
echo number_format($media, 1)
?>