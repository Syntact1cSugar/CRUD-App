<?php include("header.php")?>
<?php include("dbcon.php")?>

<div class="header-box">
    <h2> RECORDS </h2>
    <a href="addrecord1.php" class="btn btn-primary"> +ADD </a>
</div>

<table class="table table-hover table-bordered table-striped">
<thead>
        <tr>
            <th style="text-align: center; vertical-align: middle;"> ID </th>
            <th style="text-align: center; vertical-align: middle;"> FIRST NAME </th>
            <th style="text-align: center; vertical-align: middle;"> LAST NAME </th>
            <th style="text-align: center; vertical-align: middle;"> AGE </th>
            <th style="text-align: center; vertical-align: middle;"> Update </th>
            <th style="text-align: center; vertical-align: middle;"> Delete </th>
        </tr>
    </thead>
    <tbody>
        <?php
            $query = "SELECT * FROM `tbl_client`";
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
                        <td style="text-align: center; vertical-align: middle;"> <?php echo $row['id']; ?> </td>
                        <td style="text-align: center; vertical-align: middle;"> <?php echo $row['first_name']; ?> </td>
                        <td style="text-align: center; vertical-align: middle;"> <?php echo $row['last_name']; ?> </td>
                        <td style="text-align: center; vertical-align: middle;"><?php echo $row['age']; ?> </td>
                        <td style="text-align: center; vertical-align: middle;"> <a href="updaterecord1.php?id=<?php echo $row['id']; ?>" class="btn btn-success"> &#9651 </a> </td>
                        <td style="text-align: center; vertical-align: middle;"> <a href="deleterecord.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"> &#9003 </a> </td>
                    </tr>
                    <?php
                }
            }
        ?>
    </tbody>
</table>
<?php
    if(isset($_GET['inptstatus']))
    {
        echo '<div class="status-msg"><p>' . $_GET['inptstatus'] . '</p></div>';
    }
    if(isset($_GET['insrtstatus']))
    {
        echo '<div class="status-msg"><p>' . $_GET['insrtstatus'] . '</p></div>';
    }
    if(isset($_GET['dltstatus']))
    {
        echo '<div class="status-msg"><p>' . $_GET['dltstatus'] . '</p></div>';
    }
    if(isset($_GET['updtstatus']))
    {
        echo '<div class="status-msg"><p>' . $_GET['updtstatus'] . '</p><div>';
    }
?>
<?php include("footer.php")?>
