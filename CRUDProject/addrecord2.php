<?php

include("dbcon.php");

if(isset($_POST['add_record']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    
    if(empty($first_name) || empty($last_name) || empty($age))
    {
        header('location:index.php?inptstatus=Invalid%20Input!');
    }
    else
    {
        $query = "INSERT INTO `tbl_client` (`first_name`, `last_name`, `age`) VALUES ('$first_name', '$last_name', '$age')";
        $result = mysqli_query($connection, $query);
        if(!$result)
        {
            die("Query Status : Failure");
        }
        else
        {
            header('location:index.php?insrtstatus=Insert%20Successful');
        }
    }
}
?>