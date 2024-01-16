<?php
$i=1;
while ($i<11) {
    echo $i.PHP_EOL;
    $i++;
}
$k=1;
while ($k<20){
    $k++;
    if (!($k%2==0)) {
        continue;
    }
    echo $k.PHP_EOL;
}
$p=5;
while ($p=5) {
    $fact=5*4*3*2*1;
    echo $fact.PHP_EOL;
    return $fact;
}