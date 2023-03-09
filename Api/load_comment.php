<?php

    if ($_SERVER['REQUEST_METHOD']=="POST"){
        $id = $_POST['id'];
        // $a = json_encode({"comment":"$com"});

        $query = "select * from comments where img_id=$id;";

        require "../db/mainDB.php";
        $result = mysqli_query($conn,$query);
       
        $str_all ="";

        if ($result){
             
            while($data = mysqli_fetch_assoc($result)){
            //    echo $data['comment'];
                // print_r($data);
                $str_all .= "<p class ='comments'>$data[comment]
                <span style='font-size:0.8rem;'>$data[time]</span>
                </p>";
            }
            echo $str_all;

            


        }

        mysqli_close($conn);





    }

?>