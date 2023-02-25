<?php
    // check email already exist or not
    function check_email($email,$conn){
        $check_email_query = "select * from signup where email='$email';";
        $check_email_result = mysqli_query($conn,$check_email_query);

        if ($check_email_result){
            return false;
        }
        return true;

    } 

    function check_email_dataRetrieve($email,$pass,$conn){
        $check_email_query = "select * from signup where email='$email';";
        $check_email_result = mysqli_query($conn,$check_email_query);
        if ($check_email_result){   
            if (mysqli_fetch_assoc($check_email_result)['password']==$pass)
                seesion_saveUser(mysqli_fetch_assoc($check_email_result)['user']);
                return True;
        }
        return false;

        
    }
    function seesion_saveUser($user){
        session_start();
        $_SESSION['user'] = $user;
        $_SESSION['login'] = true;
        session_write_close();
    }




?>