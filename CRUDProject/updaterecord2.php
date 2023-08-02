<?php
    include ("dbcon.php");
    if(isset($_POST['update_record']))
    {
        $id = $_POST['id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $age = $_POST['age'];

        $query = "UPDATE `tbl_client` SET `first_name` = '$first_name', `last_name` = '$last_name', `age` = '$age' WHERE `id` = '$id'";

        $result = mysqli_query($connection, $query);

        if(!$result)
        {
            die("Query Status : Failed");
        }
        else
        {
            header("location:index.php?updtstatus=Record%20Updated%20Successfully");
        }
    }
?>