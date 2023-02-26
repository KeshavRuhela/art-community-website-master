<?php
    $user = "root";
    $server = "localhost";
    $pass = "";

    $database = "artcomunity";


    $conn = mysqli_connect($server,$user,$pass,$database);

    // echo "<h1>hello</h1>";
    
    if (!$conn){
        die ("not connect successful".mysqli_connect_error());
    }
    // echo "connection success";

?>