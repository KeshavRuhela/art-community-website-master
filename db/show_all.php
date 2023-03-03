<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    


<?php 

        $query = "select * from images_details";
        require "mainDB.php";
        $result = mysqli_query($conn,$query);
        if ($result){
            $div_container = "<div style='text-align:center;'>";
            $id=-1;
            while ($data = mysqli_fetch_assoc($result)){
                // print_r($data);
                $img_id = $data['id'];
                $id += 1;
                $div_container .= "
                <img class='all_image' onmouseover='functioncall($id)'  alt='Oil painting'
                        style='width:180px;height:230px; cursor: pointer; border-radius: 10px; margin:12px;'
                        src='../images/$data[image_name]'>
                        <div style='' class='myimage-details' onmouseleave='functionhide($id)'>
                        <h3>".ucfirst($data['title'])."</h3>
                        <p>₹$data[price]</p>
                        <a href='../detail_View.php?id=$img_id'><button>Buy</button></a>
                        </div>
                        ";
            }
            
            $div_container.="</div>";
            echo $div_container; 
        }




?>


</body>


<script>

var imag = document.querySelectorAll(".all_image");
var imag_hover = document.querySelectorAll(".myimage-details");
var a =-1;
function functioncall(id){

// imag.forEach(e => {
//     a +=1;
//     e.addEventListener('mouseover', () => {
        
//         // imag_hover[a].style.display ="block";
//     // Do something when the mouse is over the element
    
//   });
// });

//   console.log(imag_hover[id]);
  imag_hover[id].style.display="inline-block";

    // imag_hover.forEach(e=>{
    //     e.style.display = "block";
    // });

}

function functionhide(id){
    imag_hover[id].style.display="none";
    // alert(img_id);
}



</script>


</html>