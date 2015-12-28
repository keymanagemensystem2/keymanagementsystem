<?php
echo date('h:i:s') . "<br>";

//sleep for 5 seconds
for ($i=0;$i<60;$i++) {
    for ($j = 0; $j < 1000; $j++) {
        echo time() . "<br>";
    }
}

//start again
echo date('h:i:s'). "<br>";
?>