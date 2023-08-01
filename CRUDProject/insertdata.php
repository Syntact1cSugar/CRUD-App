<?php

include("dbcon.php");

if(isset($_POST['add_students']))
{
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $age = $_POST['age'];
    
    if(empty($first_name) || empty($last_name) || empty($age))
    {
        header('location:index.php?message=Invalid Input!');
    }
    else
    {
        $query = "INSERT INTO `tbl_student` (`first_name`, `last_name`, `age`) VALUES ('$first_name', '$last_name', '$age')";
        $result = mysqli_query($connection, $query);
        if(!$result)
        {
            die("Query Failure");
        }
        else
        {
            header('location:index.php?insert_msg=Insert Successful');
        }
    }
}
?>