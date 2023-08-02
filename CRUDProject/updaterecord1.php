<?php
    include("header.php");
    include("dbcon.php");
    if(isset($_GET['id']))
    {
        $update_id = $_GET['id'];
    }
    $query = "SELECT * FROM `tbl_client` WHERE `id` = '$update_id'";
    $result = mysqli_query($connection, $query);
    if(!$result)
    {
        die("Query Status : Failed");
    }
    else
    {
        $row = mysqli_fetch_assoc($result);
    }

?>

<form action="updaterecord2.php" method="POST">
    <div class="form-group">
        <label>ID</label>
        <input type="text" class="form-control" name="id" value="<?php echo $row['id'] ?>">
    </div>
    <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name'] ?>">
    </div>
    <div class="form-group">
        <label>Last Name</label>
       <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name'] ?>">
    </div>
    <div class="form-group">
        <label>Age</label>
        <input type="text" class="form-control" name="age" value="<?php echo $row['age']?>">
    </div>
    <input type="submit" class="btn btn-primary" name="update_record" value="Save Changes">
    <a href="index.php" class="btn btn-secondary"> Close </a>
</form>

<?php
    include("footer.php");
?>