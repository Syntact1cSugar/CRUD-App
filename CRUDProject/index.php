<?php include("header.php")?>
<?php include("dbcon.php")?>

<div class="header-box">
    <h2>RECORDS</h2>
    <a href="addrecord.php" class="btn btn-primary"> +ADD </a>
</div>

<table class="table table-hover table-bordered table-striped">
<thead>
        <tr>
            <th>ID</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>AGE</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $query = "SELECT * FROM `tbl_student`";
            $result = mysqli_query($connection, $query);
            if(!$result)
            {
                die("Query Failed");
            }
            else
            {
                while($row = mysqli_fetch_assoc($result))
                {
                    ?>
                    <tr>
                        <td> <?php echo $row['id']?> </td>
                        <td> <?php echo $row['first_name']?> </td>
                        <td> <?php echo $row['last_name']?> </td>
                        <td> <?php echo $row['age']?> </td>
                    </tr>
                    <?php
                }
            }
        ?>
    </tbody>
</table>
<?php
    if(isset($_GET['message']))
    {
        echo '<div class="error"><h6 class="error">' . $_GET['message'] . '</h6></div>';
    }
    if(isset($_GET['insert_msg']))
    {
        echo '<div class="success"><h6 class="success">' . $_GET['insert_msg'] . '</h6></div>';
    }
?>
<?php include("footer.php")?>
