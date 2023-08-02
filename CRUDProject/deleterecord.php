<?php
    include("dbcon.php");
    if(isset($_GET['id']))
    {
        $delete_id = $_GET['id'];
        $query = "DELETE FROM `tbl_client` WHERE `id` = '$delete_id'";
        $result = mysqli_query($connection, $query);
        if(!$result)
        {
            die("Query Status : Failed");
        }
        else
        {
            header("location:index.php?dltstatus=Record Deleted Successfully");
        }
    }
?>