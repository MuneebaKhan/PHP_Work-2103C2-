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
            echo "<script>alert('Data Inserted Successfully');window.location.href = 'ViewData.php';</script>";
        } else {
            echo "<script>alert('Data Insertion Failed')</script>";
        }
    } ?>


<?php if (isset($_POST['Up'])) {
    $StdID = $_POST['StdId'];
    $Name = $_POST['name'];
    $Gender = $_POST['gen'];
    $City = $_POST['city'];
    $Education = $_POST['edu'];
    $Fees = $_POST['fee'];

    $Cor = $_POST['Course'];

    $courses = implode(',', $Cor);

    $query = "update student set StduentName = ' $Name' ,Education = '$Education',Gender = ' $Gender',Fees = '$Fees',
        City = '$City',Courses = '$courses' where StdId = $StdID";

    $res = mysqli_query($con, $query);

    if ($res) {
        echo "<script>alert('Data Updated Successfully');window.location.href = 'ViewData.php';</script>";
    } else {
        echo "<script>alert('Data Updation Failed')</script>";
    }
} ?>


    <?php include 'footer.php'; ?>
