<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>ARRAY IN PHP</h3>

    <h3>INDEXED ARRAY</h3>

    <?php
    $color = ['blue', 'Orange', 'Red', 'Pink'];
    echo $color[2] . '<br>';
    echo '<pre>';
    print_r($color);
    echo '</pre>';

    //Array Using Loop
    echo '<ul>';
    for ($i = 0; $i <= 3; $i++) {
        echo "<li> Colors[$i] => $color[$i] </li>"; //$color[3]
    }
    echo '</ul>';
    ?>

    <h3>ASSOCIATIVE ARRAY</h3>
    <?php
    $students = ['Name' => 'Abc', 'Age' => 15, 'Education' => 'Inter'];
    echo '<pre>';
    print_r($students);
    echo '</pre>';
    foreach ($students as $Key => $val) {
        echo "Student[$Key] => $val <br>";
    }
    ?>
    <h3>MULTIDIMENSIONAL ARRAY</h3>
    <?php
    $stud = [
        ['Abc', 15, 5000], //00 01 02
        ['Xyz', 16, 6000], //10 11 12
        ['Efg', 17, 7000], //20 21 22
    ];

    for ($row = 0; $row <= 2; $row++) {
        echo "<p><b>Row Number $row</b></p>";
        //0<=2
        for ($col = 0; $col <= 2; $col++) {
            //1<=2
            echo $stud[$row][$col] . '<br>'; //stud[0][2]
        }
    }
    ?>

    <h3>MULTIDIMENSIONAL ARRAYEx2</h3>

     <?php $Emp = [
         ['fahad', 'Graduate', 21, 25000],
         ['Sajid', 'Master', 22, 35000],
         ['Saud', 'Inter', 23, 45000],
         ['Ahmed', 'MPhill', 24, 55000],
         ['Zahid', 'CS', 25, 65000],
     ]; ?>
    <table border = 1>
            <tr>
                <th>Name</th>
                <th>Education</th>
                <th>Age</th>
                <th>Salary</th>
                
            </tr>
            <?php for ($row = 0; $row <= 4; $row++) {
                // echo '<tr>';
                // echo "<th colspan = 8>Array[$row]</th>";
                // echo '</tr>';
                echo '<tr>';
                for ($col = 0; $col <= 3; $col++) {
                    // echo "<th>Array[$row][$col]</th>";
                    echo '<td>' . $Emp[$row][$col] . '</td>';
                }
                echo '</tr>';
            } ?>
    </table>
    



    <h3>ASSOCIATIVE MULTIDIMENSIONAL ARRAY</h3>

    <?php
        $StudentMarks = [
                "Student1" => ["Name" => "Abc","Age" => 18,"Salary"=>4000],
                "Student2" => ["Name" => "Xyz","Age" => 19,"Salary"=>5000],
                "Student3" => ["Name" => "Efg","Age" => 20,"Salary"=>6000]
        ];
    ?>

    <table border = 1>
        <?php
            foreach($StudentMarks as $key => $Val){
                echo "<tr>";
                    echo "<th colspan = 6> $key </th>";
                echo "</tr>";

                echo "<tr>";
                foreach($Val as $Key2 => $V2){
                    
                    echo "<th> [$key] => [$Key2] </th>";
                    echo '<td>'. $V2 .'</td>';
                }

                echo "</tr>";
                
            }
        ?>
    </table>

</body>
</html>