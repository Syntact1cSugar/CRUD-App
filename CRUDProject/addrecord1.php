<?php include("header.php") ?>

<form action="addrecord2.php" method="POST">
    <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" name = "first_name" placeholder="Enter First Name">
    </div>
    <div class="form-group">
        <label>Last Name</label>
       <input type="text" class="form-control" name = "last_name" placeholder="Enter Last Name">
    </div>
    <div class="form-group">
        <label>Age</label>
        <input type="text" class="form-control" name="age" placeholder="Enter Age">
    </div>
    <input type="submit" class="btn btn-primary" name="add_record" value="Save Changes">
    <a href="index.php" class="btn btn-secondary"> Close </a>
</form>

<?php include("footer.php") ?>