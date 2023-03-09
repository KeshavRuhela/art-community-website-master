<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .set-size {
            width: 80rem;
            height: 100%;
            display: flex;
            padding: 1rem

        }

        .main-container {
            background: lightpink;
        }
        .comments{
          background:lightgray; font-size:1.3rem; padding:3px; padding-left:10px; margin-right:5px; border-radius:10px;
        }
        #like-it{
          cursor: pointer;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      if (isset($_GET['id'])) {

         $id = $_GET['id'];
        

        require "db/mainDB.php";

        $query1 = "select * from images_details where id=$id;";

        // echo $query1;

        // require "../db/mainDB.php";
        $result = mysqli_query($conn, $query1);
        $all = [];
        if ($result) {
            $all = mysqli_fetch_all($result);
            
              echo ' 

              <div style="height:600px; padding:5px; padding-bottom:15px; display:flex; background:#a7fcffc7;" class="container">  
                <div style="width:45%;  overflow-y: overlay; padding:5px; height:100%; margin:auto; border:1px solid black;">
                
                  <div class="card mb-3">
                    <img src="images/'.$all[count($all)-1][7].'" class="card-img-top" alt="image">
                    <div class="card-body">
                      <h5 class="card-title">Title: '.$all[count($all)-1][1].'</h5>
                      <p class="card-text" style="font-weight:1000; font-size: 1.5rem;">₹<small style="font-weight:1000;font-size: 1rem;" class="text">'.$all[count($all)-1][3].'</small> <a onclick="like_it()" id="like_it">🤍</a></p>
                      <p class="card-text" >Description : '.$all[count($all)-1][2].'</p>
                    </div>
                  </div>
                
                </div>


              
                <div id="commentscontainers" style="width:45%; overflow-y:overlay; padding:5px; height:100%; margin:auto; border:1px solid black;">
                <p onclick="call_Comments('.$id.')">Load</p>
                </div>
              
              </div>
              
              <div class="container" style="width:100%; padding:6px; position:relative;bottom:1.5rem; background:green;  margin-right:auto;">
              
                <div style="display:flex;">
                  <input type="text" id="data-send" name="comment" style="width:70%; margin-right:10px; " class="form-control  " placeholder="Enter Comment" name="comment">
                  <button id="send-msg" onclick="send('.$id.')" class="cd-3 form-control" style="width:30%; background:lightgreen; ">send</button>
                  </div>
                  
              </div>
              ';


            }
      }
    } 
    else {
        echo "<h2>Can't be open due to some issue.</h2>";
    }
    require 'db/function.php';
    
    if (check_user()){
      $arr0 = check_user()[0];
      $arr1 = check_user()[1];
      echo "<input id='namearr0' type='text' hidden value='$arr0'/>";
      echo "<input id='userarr1' type='text' hidden value='$arr1'/>";
    }
    else {
      echo "<input id='namearr0' type='text' hidden value='0' />";
      echo "<input id='userarr1' type='text' hidden value='0' />";
    }


    ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script>
    const params = new URLSearchParams(window.location.search).get('id');
    call_Comments(params);


    function send(id){
      var data = $("#data-send").val(); // it is not a plugin is just an example
            data1={"comment":data,"id":id};
            if(data != ""){
            $.ajax({
              url: "http://localhost/art-community-website-master/Api/comment.php",
              type: "POST",
            data: data1,
            beforeSend: function () {    
              // var sethtml = document.querySelector("#commentscontainers");
              // sethtml.innerHTML = "<div class='spinner-border' role='status'> <span class='visually-hidden'>Loading...</span></div>";
                     
                },
            success: function(data) {
                // alert("Data: " + data + "\nStatus: " + status);
                console.log(data);
                var sethtml = document.querySelector("#commentscontainers");
                sethtml.innerHTML += data;
                $("#data-send").val("");
            }
        });
    }
  }

    
    
    function call_Comments(id){
      
      $.ajax({
              url: "http://localhost/art-community-website-master/Api/load_comment.php",
              type: "POST",
              data:{"id":id},
                beforeSend: function () {    
                    //  $("#loadingDIV").show();
                     var sethtml = document.querySelector("#commentscontainers");
                     sethtml.innerHTML = "<div class='spinner-border' role='status'> <span class='visually-hidden'>Loading...</span></div>";
                },
                success: function(data) {
                console.log(data);
                var sethtml = document.querySelector("#commentscontainers");
                sethtml.innerHTML = data;
                sethtml.scrollTop =sethtml.scrollHeight;
            }

    });
  }

</script>

<script>

  // var liking = document.querySelector("#like-it");

  var like_symbol = $("#like_it");
  var user_name = $("#namearr0").val();
  var user_id = $("#userarr1").val();
  // alert("k"+user_name +user_id);

    function like_it(){
      if (user_name !='0' && user_id!='0'){
        $.ajax({
            url: "http://localhost/art-community-website-master/Api/like.php",
            type: "POST",
            data:{"id":params,"user_name":user_name,"user_id":user_id},
            beforeSend: function () {        
                },
            success: function(data) {
                console.log(data);
                like_symbol.text("❤️");
            },
            error : function(){
              like_symbol.text("🖤");
            }
        });
      }
    }
    
      
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</html>