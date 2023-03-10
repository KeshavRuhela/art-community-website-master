<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Calistoga&family=Courgette&family=Labrada&family=Phudu:wght@600&family=Satisfy&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Wishlist</title>
    <style>
        .myimage-details{
            position: relative;
            top: -127px;
            left:-198px;
            width: 165px;
            height: 215px;
            border-radius: 15px;
            display: none;
            background-color: rgba(0,0,0,0.5);
            color: #fff;
            text-align: center;
            padding: 9px;
            margin-top: 3px;
            margin-bottom:-205px;
            margin-right:-190px;
            
        }
    </style>
</head>

<body>
    <div class="start">
        <header>
            <li style="list-style-type: none;">
            <li>
                <h1 class="art">ART AVENUE &nbsp;</h1>
            </li>
            <li>
                <p><input type="text" class="search" placeholder="Search" class="search"></p>
            </li>
            <li>

            <li>
                <p class="head"><a href="index.html"><span class="material-symbols-outlined">home</span></a></p>
            </li>
            <li>
                <p class="head"><a href="sign_in.html" target="_blank"><span
                            class="material-symbols-outlined">login</span></a></p>
            </li>
            <li>
                <p class="head"><a href="wishlist.html"><span class="material-symbols-outlined">favorite</span></a>
                </p>
            </li>
            <li>
                <p class="head"><a href="cart.html"><span
                            class="material-symbols-outlined">shopping_cart_checkout</span></a></p>
            </li>
            </li>
            <hr>
        
        </header>
    </div>
    
<?php 

    require "db/function.php";

    if (check_user()){
        $user_id = check_user()[1];
        $query = "select * from liked_images where user_id = '$user_id';";
        require "db/mainDB.php";
        $result = mysqli_query($conn,$query);
        if ($result){
            $div_container = "<div style='text-align:center;'>";
            $id=-1;
            while ($data = mysqli_fetch_assoc($result)){
                // print_r($data);
                $img_id = $data['image_id'];
                $img_sno = $data['sno'];

                $fetch_img_detail = "select * from images_details where id=$img_id;";
                $img_result = mysqli_query($conn,$fetch_img_detail);
                if ($img_result){
                    $img_data = mysqli_fetch_assoc($img_result);
                    $id += 1;
                    $div_container .= "  <img class='all_image' onmouseover='functioncall($id)'  alt='Oil painting'
                    style='width:180px;height:230px; cursor: pointer; border-radius: 10px; margin:12px;'
                    src='images/$img_data[image_name]'>
                    <div style='' class='myimage-details' onmouseleave='functionhide($id)'>
                    <h3>$img_data[title]</h3>
                    <p>₹$img_data[price]</p>
                    <a href='detail_View.php?id=$img_id'><button>Details</button></a>
                    <button onclick='remove($img_sno)'>Remove</button>
                    </div>
                    ";
                }
                else{
                   echo "Some technical issues!";
                }
                
            }
            $div_container.="</div>";
            echo $div_container; 
        }
    }
    else {
        header("location:sign_in.html");
    }


?>


    
</body>
<script>

var imag = document.querySelectorAll(".all_image");
var imag_hover = document.querySelectorAll(".myimage-details");
var a =-1;
function functioncall(id){


  imag_hover[id].style.display="inline-block";


}

function functionhide(id){
    imag_hover[id].style.display="none";
    // alert(img_id);
}



</script>


</html>