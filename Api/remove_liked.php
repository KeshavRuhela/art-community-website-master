<?php

  if ($_SERVER['REQUEST_METHOD']=='POST'){
    $sno = $_POST['sno'];

    $query = "delete from liked_images where sno=$sno;";
    echo $query;
    require "../db/mainDB.php";
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    if ($result){
        $arr = ["delete"=>true];        
        $arr = json_encode($arr);
    }
    else{
        echo "<h2>can't be delete</h2>";
    }

  }
?>