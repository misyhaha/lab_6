<!DOCTYPE html>
<html>
    <head>
        <title>LAB 6 Q3</title>
    </head>
    <body>
        <?php 
        //create a function
        function calculateArea($width, $height){
            return $width * $height;
        }
        $width = 4;
        $height = 2;

        $area = calculateArea($width, $height);
        
        echo("The area of a rectangle with a width of $width and height of  $height is $area" );
        ?>
        </body>
        </html>
        