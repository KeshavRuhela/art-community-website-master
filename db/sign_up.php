<?php 
    require "mainDB.php";
    require "function.php";

    $_name = htmlspecialchars($_POST['name']);
    $_email = htmlspecialchars($_POST['email']);
    $_pass = htmlspecialchars($_POST['password']);

    
    if ($_name == ""){
        if (check_email_dataRetrieve($_email,$_pass,$conn)){
            header("location: ../h.index.html?login=1");
            // echo "heelloo";
            exit();
        }
        header("location: ../index.html?login=0");
        exit();
    }
    // check email already exist or not
    if (check_email($_email, $conn)){
        
        // insert signUp details in DB
        $query = "insert into signup (name,email,password) values('$_name','$_email','$_pass');";
        echo "<br>$query";

        $result = mysqli_query($conn,$query);
        if ($result){
            echo "inserted Success !";
            header("location: ../sign_in.html?param1=0");

        }
    }
    else {
        echo "<h3>email already exist</h3>";
        header("location: ../sign_in.html?param1=1");
    }


?>