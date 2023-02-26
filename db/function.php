<?php
    // check email already exist or not
    function check_email($email,$conn){
        $check_email_query = "select * from signup where email='$email';";
        $check_email_result = mysqli_query($conn,$check_email_query);
        if ($check_email_result){
            // echo "error";
            return true;
        }
        return false;

    } 

    function check_email_dataRetrieve($email,$pass,$conn){
        $check_email_query = "select * from signup where email='$email';";
        $check_email_result = mysqli_query($conn,$check_email_query);
        $arr = mysqli_fetch_assoc($check_email_result);
        if ($check_email_result){   
            if ($arr['password']=="$pass"){
                seesion_saveUser($arr['name'],$arr['email']);
                return true;
            }
        }
        return false;

        
    }
    function seesion_saveUser($user,$email){
        session_start();
        session_unset();
        $_SESSION['user'] = $user;
        $_SESSION['user_id'] = $email;
        $_SESSION['login'] = true;
        // session_write_close();
    }

    function check_User(){
        session_start();
        if (isset($_SESSION['user'])){
            $arr = [$_SESSION['user'],$_SESSION['user_id']];
            return $arr;
        }
        else{
            return false;
        }
    }

    function logout(){
        session_start();
        session_unset();
        session_destroy();
    }



?>