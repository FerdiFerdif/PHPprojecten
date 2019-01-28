<?php
/**
 * Created by PhpStorm.
 * User: ferdi
 * Date: 1/28/2019
 * Time: 10:44 AM
 */
?>
<!DOCTYPE html>
<html>
<head>
    <title>H04 OP4</title>
    <style>
        body {
            text-align:center;
            font-size: 30px;
            position: relative;
            top: 250px;
        }
    </style>
</head>
<body>
<?php
$bedrag = 10;
$leeftijd = 10;
    if($leeftijd>65){
    $bedrag = $bedrag *0.5;
}
    if($leeftijd<=12) {
    $bedrag = $bedrag * 0.5;
}
    if($leeftijd<3){
    $bedrag = 0;
}
echo "Je bent ",$leeftijd," jaar oud<br>";
            echo "Het bedrag is: ", $bedrag, " EURO";
?>
<br> <br>
<?php
$bedrag = 10;
$leeftijd = 2;
    if($leeftijd>65){
    $bedrag = $bedrag *0.5;
}
    if($leeftijd<=12) {
    $bedrag = $bedrag * 0.5;
}
    if($leeftijd<3){
    $bedrag = 0;
}
echo "Je bent ",$leeftijd," jaar oud<br>";
            echo "Het bedrag is: ", $bedrag, " EURO";
?>
<br> <br>
<?php
$bedrag = 10;
$leeftijd = 65;
    if($leeftijd>65){
    $bedrag = $bedrag *0.5;
}
    if($leeftijd<=12) {
    $bedrag = $bedrag * 0.5;
}
    if($leeftijd<3){
    $bedrag = 2;
}
echo "U bent ",$leeftijd," jaar oud<br>";
            echo "Het bedrag is: ", $bedrag, " EURO";
?>
<br> <br>
<?php
$bedrag = 10;
$leeftijd = 12;
    if($leeftijd>65){
    $bedrag = $bedrag *0.5;
}
    if($leeftijd<=12) {
    $bedrag = $bedrag * 0.5;
}
    if($leeftijd<3){
    $bedrag = 2;
}
echo "Je bent ",$leeftijd," jaar oud<br>";
                echo "Het bedrag is: ", $bedrag, " EURO";
?>
</body>
</html>