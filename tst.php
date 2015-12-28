<?php
/**
 * Created by PhpStorm.
 * User: Amutheez
 * Date: 8/9/2015
 * Time: 4:35 PM
 */
$counter = 0;
while($counter <30) {
    echo ($counter) . "<br>";
    $wait=0;
    while ($wait < 1000000) {
        $wait++;
    }
    $counter++;
}
?>