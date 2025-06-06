<?php
fscanf(STDIN,"%d",$students_number);

while($students_number > 0){
    $checker = 4;
    $dividend = 0;
    $divisor = 0;
    $count = 1;
    
    fscanf(STDIN,"%s%d",$name,$subjects);
    echo "Student: $name\nSubjects: $subjects\n";

    while($subjects > 0){
        fscanf(STDIN,"%s%f%d%f%d%f%d%f%d",$subject_name,$grade,$weight,$grade1,$weight1,$grade2,$weight2,$grade3,$weight3);
        $dividend = ($grade * $weight)+($grade1 * $weight1)+($grade2 * $weight2)+($grade3 * $weight3);
        $divisor = ($weight + $weight1 + $weight2 + $weight3);
        $checker -= 1;
        $media = ($dividend / $divisor);
        echo "$subject_name #$count: " . number_format($media, 1) . "\n";
        $subjects -= 1;
        $count += 1;
        if($subjects==0){
            break;
        }
    }echo "\n";
    $students_number -= 1;
}
?>
