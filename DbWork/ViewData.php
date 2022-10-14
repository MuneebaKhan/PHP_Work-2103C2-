<?php include 'header.php'; ?>
<?php include 'connection.php'; ?>



<?php
$query = 'select * from student';
if (isset($_GET['srch'])) {
    $search = $_GET['search'];
    $query = "select * from student where StduentName like '%$search%' or City like '%$search%' ";
}
$res = mysqli_query($con, $query); // $data = mysqli_fetch_assoc($res);
$rowCount = mysqli_num_rows($res);
echo $rowCount;

// print_r($data);
?>

<form action = "" method = "get">
                <div class="input-group col-lg-6 container mb-5 mt-3">
                    <input type="text" class="form-control" placeholder="Search" name = "search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary" name = "srch" >Search</button>

                        <a href="ViewData.php" class = "btn btn-primary ml-3">Reset</a>
                    </div>
                        
                </div>
                
            </form>

<?php
if ($rowCount > 0) { ?>



        <table class = "container table table-bordered">
        <tr>
            <th>StudentId</th>
            <th>Name</th>
            <th>Education</th>
            <th>Gender</th>
            <th>City</th>
            <th>Fee</th>
            <th>Courses</th>
        </tr>

        <?php while ($data = mysqli_fetch_assoc($res)) {
            echo '<tr>'; ?>


            <td>  <?= $data['StdId'] ?>  </td>
            <td> <?= $data['StduentName'] ?> </td>
            <td> <?= $data['Education'] ?></td>
            <td><?= $data['Gender'] ?></td>
            <td><?= $data['City'] ?></td>
            <td><?= $data['Fees'] ?></td>
            <td><?= $data['Courses'] ?></td>

            <td><a href="Edit.php?id=<?= $data[
                'StdId'
            ] ?>" class = "btn btn-primary">Edit</a></td>

             <td><a href="ViewData.php?Delid=<?= $data[
                 'StdId'
             ] ?>" class = "btn btn-danger" onclick = "return confirm('Are you sure you want to delete!!'); return false;">Delete</a></td>


        <?php echo '</tr>';
        } ?>
        
        </table>


<?php } else {echo '<p>No Record Found</p>';}
error_reporting(0);
$DelID = $_GET['Delid'];
$quer = "delete from student where StdId = $DelID";
$res = mysqli_query($con, $quer);
if ($res) {
    echo "<script>alert('Data Deleted!!');window.location.href = 'ViewData.php';</script>";
}
?>

 <?php include 'footer.php'; ?>
