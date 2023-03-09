<?php 
    if ($_SERVER['REQUEST_METHOD']=='POST'){
        $img_id = $_POST['id'];
        $user_id = $_POST['user_id'];
        $user_name = $_POST['user_name'];

        // echo "$img_id | $user_id | $user_name";
        
        require "../db/mainDB.php";

        $query = "insert into liked_images(image_id,user_id,user_name) values($img_id,'$user_id','$user_name');";

        $result = mysqli_query($conn,$query);
        if ($result){
            mysqli_close($conn);
            $array= ['inserted'=>true];
            $jarray = json_encode($array);
            echo $jarray;
        }
        else{
            $array= ['inserted'=>false];
            $jarray = json_encode($array);
            echo $jarray;
            mysqli_close($conn);
        }
        

    }
?>