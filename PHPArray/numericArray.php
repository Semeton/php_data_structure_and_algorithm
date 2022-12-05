<?php
/**
 * @author Semeton Balogun <balogunsemeton@gmail.com>
 * Sequential numeric array in PHP
 */
echo "Implementing sequential numeric array";
$array = [10, 20, 30, 40, 50];
$array[] = 60;
$array[] = 70;

for($i = 0; $i<count($array); $i++){
    echo "Position ".$i." holds the value ".$array[$i]."<br/>";
}

echo "<br/>";
/**
 * Non-sequential numeric array in PHP
 */
echo "Implementing non-sequential numeric array";
$arr = [];
$arr[10] = 100;
$arr[21] = 200;
$arr[29] = 300;
$arr[500] = 1000;
$arr[1001] = 10000;
$arr[71] = 1971;

foreach ($arr as $i => $a) {
    echo "Position ".$i." holds the value ".$a."<br/>";
}