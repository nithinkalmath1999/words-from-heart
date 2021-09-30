<?php
session_start();
include_once "db.php";
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($email)&& !empty($password))
{
    $sql = mysqli_query($conn, "SELECT * FROM visitors WHERE email='{$email}'");
    if(mysqli_num_rows($sql)>0){
        $rows=mysqli_fetch_assoc($sql);
        $user_pass = md5($password);
        $enc_pass = $rows['password'];
        if($user_pass === $enc_pass){
            $_SESSION['unique_id'] = $rows['unique_id'];
            echo "<script>alert('Success')</script>";
            header('location: ../quotes.php');
        }else{
            echo "Email or Password is incorrect";
        }
    }else{
        echo "$email - This email not exsist";
    }
}else{
    echo "All input fields are required";
}

?>