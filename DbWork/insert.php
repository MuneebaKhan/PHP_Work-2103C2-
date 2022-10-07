    <?php include 'header.php'; ?>

    <?php include 'connection.php'; ?>


    <?php if (isset($_POST['ins'])) {
        $Name = $_POST['name'];
        $Gender = $_POST['gen'];
        $City = $_POST['city'];
        $Education = $_POST['edu'];
        $Fees = $_POST['fee'];

        $Cor = $_POST['Course'];

        $courses = implode(',', $Cor);

        $query = "insert into student(StduentName,Education,Gender,Fees,City,Courses)values('$Name','$Education','$Gender','$Fees','$City','$courses')";

        $res = mysqli_query($con, $query);

        if ($res) {
            echo "<script>alert('Data Inserted Successfully')</script>";
            echo "<a href = 'home.php'>Insert More Records</a>";
        } else {
            echo "<script>alert('Data Insertion Failed')</script>";
        }
    } ?>




    <?php include 'footer.php'; ?>
