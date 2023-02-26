<?php
require "function.php";
$check = check_User();
echo "hello<br>";
var_dump($check);
echo "hello<br>";
if($check){
    

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $file = $_FILES['img'];
        $name= $_POST['name'];
        $email= $_POST['email'];
        $title= $_POST['title'];
        $mobile= $_POST['mobile'];
        $price= $_POST['price'];
        $desc= $_POST['desc'];

        echo var_dump($file)." |   $name,|  $email,|  $title,|  $mobile,|  $price";

        $file_name = $check[0]."1.jpg";
        echo "<br><br><br>";

        require "mainDB.php";

        $query = "select * from suggession;";
        $result = mysqli_query($conn,$query);
        $all_data = mysqli_fetch_all($result);
        // while (mysqli_num_rows($result)!= null){
        $last = $all_data[count($all_data)-1][0] +1;
        // }
        echo $last;
        
        // exit();
        
        
        
        $file_name = $check[0].$last.".jpg";
        
        $query = "insert into suggession(user_id,mobile,title,price,description,tags,image_name,user,img_orignal_name) values('$check[1]',$mobile,'$title',$price,'$desc','all','$file_name','$check[0]','$check[0]$file[name]');";

        echo $query;

        // insert image and entry

        $result = mysqli_query($conn,$query);
        if ($result){
            move_uploaded_file($file["tmp_name"],"../received_image/".$file_name);
            echo "inserted successful";
            header("location: ../ideas.html?imageexist=success");
        }
        else if ( mysqli_errno($conn) ==1062){
            echo "<h2>image already uploaded</h2>";
            header("location: ../ideas.html?imageexist=1");
        }
        else{
            echo mysqli_error($conn);
            header("location: ../ideas.html?imageexist=0");
        }

        mysqli_close($conn);




    }
   
}
else{
    header("location: ../sign_in.html?loginfirst=true");
}
?>