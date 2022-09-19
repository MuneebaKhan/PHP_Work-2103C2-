<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>START PHP</h1>

    <?php
        $a = 10;
        $b = 20;

        $c = $a + $b;

        echo "Value of a: ".$a. "and value of b: ".$b. "is equal to ".$c."<br>";

        var_dump($a);


        $text = "Sample text";
        $number = 100;

        echo "<br>";

        echo "Value of text is".$text. "And number is: ".$number;

        echo "<h3>SWAP Two Number</h3>"

    ?>


    <h3>PHP STRING FUNCTION</h3>

    <?php
        $stringChar = "Hello Steve";
        $stringLength = strlen($stringChar); //string length
        $stringWordCount =  str_word_count($stringChar); //word Count
        $stringReverse = strrev($stringChar);//Reverse String
        $stringFind = strpos($stringChar,"Steve"); //find string

        $stringReplace =  str_replace("Steve","Diana",$stringChar); //Replace String


        echo "Length of string <b>".$stringChar."</b> is".$stringLength."<br>";
        echo "Count of string <b>".$stringChar."</b> is".$stringWordCount."<br>";

        echo "Reverse of string <b>".$stringChar."</b> is".$stringReverse."<br>";

        echo "Find of string <b>".$stringChar."</b> is".$stringFind."<br>";

        echo "Replace of string <b>".$stringChar."</b> is".$stringReplace."<br>";


    ?>

    <h1> <?= $stringChar ?> </h1>


    <h3>Area of Surfaces</h3>

    <?php
        echo "<h3> Area Of Surface</h3>";

        $radius = 6;
        $surfaceArea = 4 * pi() * $radius * $radius;

     
    ?>

    <p>Surface Area is:  <?= $surfaceArea ?> </p>
</body>
</html>