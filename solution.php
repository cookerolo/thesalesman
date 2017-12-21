<?php

$handle = fopen ("php://stdin", "r");
function minimumTime($x) {
    //  Return the minimum time needed to visit all the houses.
    rsort($x);
    $output = 0;
    for($i = 0; $i < count($x)-1; ++$i) {
       output += $x[$i] - $x[$i+1];        
    }
    return $output;
}

fscanf($handle, "%i",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle, "%i",$n);
    $x_temp = fgets($handle);
    $x = explode(" ",$x_temp);
    $x = array_map('intval', $x);
    $result = minimumTime($x);
    echo $result . "\n";
}

?>
