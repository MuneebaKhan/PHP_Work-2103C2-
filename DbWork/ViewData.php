<?php include 'header.php'; ?>
<?php include 'connection.php'; ?>



<?php
$query = 'select * from student';
$res = mysqli_query($con, $query); // $data = mysqli_fetch_assoc($res);
$rowCount = mysqli_num_rows($res);
echo $rowCount;
// print_r($data);
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

            <td><a href="Edit.php?id=<?= $data['StdId'] ?>" class = "btn btn-primary">Edit</a></td>


        <?php echo '</tr>';
        } ?>
        
        </table>


<?php } else {echo '<p>No Record Found</p>';}
?>

 <?php include 'footer.php'; ?>
