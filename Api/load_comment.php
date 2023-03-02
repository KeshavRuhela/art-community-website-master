<?php

    if ($_SERVER['REQUEST_METHOD']=="POST"){
        $com = $_POST['comment'];
        $img_id = $_POST['id'];

        // $a = json_encode({"comment":"$com"});

        $query = "select * from comments;";

        require "../db/mainDB.php";
        $result = mysqli_query($conn,$query);
        $timeVar = time();
        $date_time = date('Y-m-d H:i:s', $timeVar);

        if ($result){
            echo "<p class ='comments'>
            $com
            <span style='font-size:0.8rem;'>$date_time</span>
            </p>";

        }

        mysqli_close($conn);





    }

?>