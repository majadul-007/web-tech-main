<?php 
     if(!isset($_SESSION)) 
     { 
         session_start(); 
     } 
    include_once "config.php";
    $checkEmail = isset($_POST['email'])? $_POST['email']: '';
    $checkPass = isset($_POST['password'])? $_POST['password']: '';

    $email = mysqli_real_escape_string($conn, $checkEmail);
    $password = mysqli_real_escape_string($conn, $checkPass);
    if(!empty($email) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM productmanager WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
            $user_pass = md5($password);
            $enc_pass = $row['password'];
            if($user_pass === $enc_pass){
                $status = "Active now";
                $sql2 = mysqli_query($conn, "UPDATE productmanager SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
                if($sql2){
                    $_SESSION['unique_id'] = $row['unique_id'];
                    echo "success";
                }else{
                    echo "Something went wrong. Please try agains!";
                }
            }else{
                echo "Email or Password is Incorrect!";
            }
        }else{
            echo "$email - This email not Exist!";
        }
    }else{
        echo "All input fields are required!";
    }
?>