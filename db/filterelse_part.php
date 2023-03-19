<?php
    $query = "select * from images_details";
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
        echo $div_container;
    }

    
// if ($_SERVER['REQUEST_METHOD'] == 'GET') {

//     if (isset($_GET['painting']) && $_GET['painting'] != '') {
//         $paint = $_GET['painting'];
//         if (isset($_GET['color']) && $_GET['color'] != '') {
//             $color = $_GET['color'];
//             if (isset($_GET['price']) && $_GET['price'] != '') {
//                 $price = $_GET['price'];
//                 if (isset($_GET['Discount']) && $_GET['Discount'] != '') {
//                     $discount = $_GET['Discount'];
//                     if (isset($_GET['shape']) && $_GET['shape'] != '') {
//                         $shape = $_GET['shape'];
//                         if (isset($_GET['Exclusive']) && $_GET['Exclusive'] != '') {
//                             $exclusive = $_GET['Exclusive'];
//                             echo "painting = $paint color = $color price = $price discount = $discount shape = $shape Exclusive = $exclusive";



//                         } else {
//                             include 'filterelse_part.php';
//                         }
//                     } else {
//                         include 'filterelse_part.php';
//                     }
//                 } else {
//                     include 'filterelse_part.php';
//                 }
//             } else {
//                 include 'filterelse_part.php';
//             }
//         } else {
//             include 'filterelse_part.php';
//         }
//     } else {
//         include 'filterelse_part.php';
//     }
// } else {
//     include 'filterelse_part.php';
// }

?>