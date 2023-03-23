<?php
    if ($_SERVER['REQUEST_METHOD']=='GET'){
        $term = $_GET['text'];
        if ($term != ""){
            $query ="select * from images_details where title like '%$term%' or description like '%$term%' or tags like '%$term%' or category like '%$term%' or price like '%$term%' ";
            require "../db/mainDB.php";
            $result = mysqli_query($conn, $query);
            if ($result) {
                $div_container = "<div id='container_images' style=''>";
                $id = -1;
                while ($data = mysqli_fetch_assoc($result)) {
                    // print_r($data);
                    $tit = substr($data['title'],0,7);                    
                    $img_id = $data['id'];
                    $id += 1;
                    $div_container .= "
                        <img class='all_image' onmouseover='functioncall($id)'  alt='Oil painting'
                                style='width:180px;height:230px; cursor: pointer; border-radius: 10px; margin:12px;'
                                src='/art-community-website-master/images/$data[image_name]'>
                                <div style='text-align:center;' class='myimagesearch-details' onmouseleave='functionhide($id)'>
                                <h3>".$tit."</h3>
                                <p style='color:white;'>₹$data[price]</p>
                                <a style='' href='../art-community-website-master/detail_View.php?id=$img_id'>Buy</a>
                                </div>
                                ";
                }
                if  (mysqli_num_rows($result) == 0){
                        echo "<p align='center'>Nothing found !</p>";
                }
    
    
                $div_container .= "</div>";
                // require "../db/mainDB.php";
    
                echo $div_container;
            }
        }
        else{
            echo "";
        }

    }
?>