<?php
/**
 * Created by PhpStorm.
 * User: ferdi
 * Date: 1/28/2019
 * Time: 8:56 AM
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Php Opdrachten</title>
    <style>
        body {
        text-align:center;
            margin-top: 50px;
        }

    </style>
</head>
<body>
<?php
for($i = 0; $i <=15; $i++) {
    for($j = 0; $j<$i; $j++) {
        echo "*";
    }
    echo "*<br>";
}
    ?>
</body>
</html>
