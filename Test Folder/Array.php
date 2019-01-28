<?php
/**
 * Created by PhpStorm.
 * User: ferdi
 * Date: 1/28/2019
 * Time: 8:34 AM
 */

$apen = array("Bro","Brah","Bruh","Brow");
$apen[4] = "Wildling";
$apen[6] = "Nuthin";


echo "<ul>";
foreach($apen as $aap) {
    echo "<li>".$aap."</li>";
}

echo "</ul>";