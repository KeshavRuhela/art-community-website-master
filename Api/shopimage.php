<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title  = htmlspecialchars($_POST['Title']);
    $description  = htmlspecialchars($_POST['Description']);
    $price  = htmlspecialchars($_POST['price']);
    
    $tag  = htmlspecialchars($_POST['Tags']);
    $cate  = htmlspecialchars($_POST['Category']);
    $file = $_FILES['imagefile'];

    // $query = "insert into images_details (title,description,price,tags,category) values($price);";
    $query1 = "select * from images_details";

    echo $query1;
    require "../db/mainDB.php";
    $result = mysqli_query($conn, $query1);
    if ($result){
        $all = mysqli_fetch_all($result);
        $last = $all[count($all)-1][0] + 1;
        $last_img = $all[count($all)-1][7];
        
    }
    if ($last_img != $file['name']){

        $query2 = "insert into images_details (title,description,price,tags,category,image_name) values('$title','$description',$price,'$tag','$cate','shop$last.jpg');";
        $result = mysqli_query($conn, $query2);
        if ($result){
            move_uploaded_file($file['tmp_name'],"../images/shop$last.jpg");
        }
    }
    mysqli_error($conn);
    mysqli_close($conn);
    unset($_POST);    
    header("location: ../db/shopimage_detail.php");
  
    exit();



}
?>