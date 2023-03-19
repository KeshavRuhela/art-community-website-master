<?php
$painting = isset($_GET['painting']) ? $_GET['painting'] : "";
// $color = isset($_GET['color']) ? $_GET['color'] : "";
$price = isset($_GET['price']) ? explode("-",$_GET['price']) :"";
// var_dump($price);
// $rangeprice = explode("-",$price);
// $Discount = isset($_GET['Discount']) ? $_GET['Discount'] : "";
// $shape = isset($_GET['shape']) ? $_GET['shape'] : "";
// $Exclusive = isset($_GET['Exclusive']) ? $_GET['Exclusive'] : "";


if($price != "" && isset($price[1])){
    if ($price[0]==$price[1]){
    $query = "select * from images_details where category like '%$painting' AND price>=$price[0]";
    }else{
    $query = "select * from images_details where category like '%$painting' AND price>=$price[0] AND price<=$price[1]";

    }
}
elseif(!isset($price[1]) && isset($price[0])&& $price[0]=="") {

    $query = "select * from images_details where category like '%$painting' ";

}
elseif(!isset($price[1]) && isset($price[0])) {

    $query = "select * from images_details where category like '%$painting' AND price>=$price[0]";

}
else{
    $query = "select * from images_details where category like '%$painting'";
}
// echo $query;
    require "mainDB.php";
    $result = mysqli_query($conn, $query);
    if ($result) {
        $div_container = "<div style='text-align:center;'>";
        $id = -1;
        while ($data = mysqli_fetch_assoc($result)) {
            // print_r($data);
            $img_id = $data['id'];
            $id += 1;
            $div_container .= "
                <img class='all_image' onmouseover='functioncall($id)'  alt='Oil painting'
                        style='width:180px;height:230px; cursor: pointer; border-radius: 10px; margin:12px;'
                        src='../images/$data[image_name]'>
                        <div style='' class='myimage-details' onmouseleave='functionhide($id)'>
                        <h3>" . ucfirst($data['title']) . "</h3>
                        <p>₹$data[price]</p>
                        <a href='../detail_View.php?id=$img_id'><button>Buy</button></a>
                        </div>
                        ";
        }

        $div_container .= "</div>";
        if($div_container == "<div style='text-align:center;'></div>"){
            $div_container = '<h3 style="text-align:center;">Nithing To Show!</h3>';
        }
        echo $div_container;

    }
?>