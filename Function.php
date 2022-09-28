<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>Simple Function</h3>

    <?php
    function Add()
    {
        $num1 = 90;
        $num2 = 80;
        $sum = $num1 + $num2;
        echo "Result is: $sum";
    }
    Add();
    ?>
    <h3>Paramterized Function</h3>
    <?php
    function Average($n1, $n2, $n3)
    {
        $sum = $n1 + $n2 + $n3;
        $Avg = $sum / 3;
        echo "Average is: $Avg";
    }

    Average(70, 80, 90);
    ?>
    <h3>Default Paramterized Function</h3>
    <?php
    function WithdefaultValue($name, $Age = 12)
    {
        echo "Name is $name and Age is $Age";
    }
    WithdefaultValue('Abc', 19);
    echo '<br>';
    WithdefaultValue('Xyz');
    ?>
       <h3>Return Value</h3>
       <?php
       function Ret()
       {
           $num = 10;
           $num2 = 90;
           $res = $num + $num2;

           echo $res;

           return $res;
       }
       $x = Ret() + 90;
       echo '<br>';
       echo $x;
       ?>
       <h3>Function Pass By Value And Pass By Reference</h3>
       <?php
       function val($num)
       {
           $num += 4;
           echo $num;
       }
       $n = 10;
       val($n);
       echo "The original value of n still is: $n <br>";

       function Ref(&$num)
       {
           $num += 4;
           echo $num;
       }
       $n = 10;
       Ref($n);
       echo "The original value of n changed is: $n";
       ?>
      




</body>
</html>