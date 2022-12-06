<?php
/**
 * @author Semeton Balogun <balogunsemeton@gmail.com>
 * SplFixedArray Method
 */
$array = new SplFixedArray(10);
for ($i=0; $i < 10; $i++) { 
    $array[$i] = $i;
}

for ($i=0; $i < 10; $i++) { 
    echo $array[$i]."<br/>";
}

/**
 * Checking for performance
 */

 $startMemory = memory_get_usage();
 $arr = range(1, 100000);
 $endMemory = memory_get_usage();
 echo ($endMemory - $startMemory)." bytes";