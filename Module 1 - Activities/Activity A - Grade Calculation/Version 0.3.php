<?php
$checker = 4;
$dividend = 0;
$divisor = 0;
$count = 1;

fscanf(STDIN,"%d",$students_number);
while($students_number > 0){
fscanf(STDIN,"%s%d",$name,$subjects);
echo "Student: $name\nSubjects: $subjects\n";
while($subjects > 0){
    while($checker <> 0){
        fscanf(STDIN,"%f",$grade);
        fscanf(STDIN,"%f",$weight);
        $dividend += $grade * $weight;
        $divisor += $weight;
        $checker -= 1;
    }
    $media = ($dividend / $divisor);
    echo "Subject #$count: " . number_format($media, 1) . "\n";
    $subjects -= 1;
    $count += 1;
    if($subjects==0){
        break;
    }
    $checker = 4;
}echo "\n";
$students_number -= 1;
$count = 1;
}
?>
