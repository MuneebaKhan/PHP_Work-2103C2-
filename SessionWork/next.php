<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    <?php
    
        session_start();
        $AdminName = $_SESSION["Name"];
        $AdminPass =  $_SESSION["Pass"];


        
    ?>

    <p> Admin Name   <?=  @$AdminName?> </p>
    <p> Admin Pass   <?=  @$AdminPass?> </p>
</body>
</html>