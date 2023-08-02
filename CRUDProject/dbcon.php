<?php
    define("HOSTNAME", "LOCALHOST");
    define("USERNAME", "root");
    define("PASSWORD", "");
    define("DATABASE", "clientdb");

    $connection = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);
    if(!$connection)
    {
        die("Connection Status : Failed");
    }
    
?>