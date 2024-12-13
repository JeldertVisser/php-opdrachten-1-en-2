<!DOCTYPE html>
<html lang>
<title=">
<body>
<?php
$even = 0;
$uneven = 0;
$nums = [42, 67, 35, 89, 24, 76, 58, 93, 7, 30, 83, 46, 13, 25, 98, 53, 17, 79, 57, 8];
//counts even and uneven numbers for echo statement
foreach ($nums as $num){
    if ($num % 2 == 0){
        $even += 1;
    }
    else{
        $uneven += 1;
    }
}
echo "even: $even <br> uneven: $uneven <br>";
?>
</body>
</html>
