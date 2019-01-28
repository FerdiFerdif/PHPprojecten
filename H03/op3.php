<?php
/**
 * Created by PhpStorm.
 * User: ferdi
 * Date: 1/28/2019
 * Time: 10:18 AM
 */
?>

<DOCTYPE html>
    <html>
    <head>
        <title>
            PHP H03 OP3
        </title>
        <style>
            body {
                text-align: center;
            }

            img {
                margin-top: 2px;
                margin-right: 1px;
                margin-left: 1px;
            }

            .rood {
                border: solid red 5px;
            }

            .groen {
                border: solid green 5px;
            }
        </style>
    </head>
    <body>
    <?php
    for($i = 1; $i <=9; $i++) {
        if($i % 2 == 0) {
            $class = "class='rood'";
        } else {
            $class = "class='groen'";
        }
        echo "<img ".$class." src='apen/aap".$i.".jpg'>";
    }
    ?>
    </body>
    </html>
</DOCTYPE>

