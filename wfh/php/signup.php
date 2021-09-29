<?php
session_start();
include_once "db.php";
$name= mysqli_real_escape_string($conn, $_POST['name']);
$email= mysqli_real_escape_string($conn, $_POST['email']);
$password =mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($name) && !empty($email) && !empty($password)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $sql = mysqli_query($conn, "SELECT *FROM visitors WHERE email = '{$email}'");
        if(mysqli_num_rows($sql)>0){
           echo "$email - This email already exists!";
        }else{
            $ran_id = rand(time(),100000000);
            $encrypt_pass = md5($password);
            $insert_query = mysqli_query($conn, "INSERT INTO visitors(unique_id, name, email, password) VALUES ({$ran_id},'{$name}','{$email}','{$encrypt_pass}')");
            if($insert_query)
            {
                $select_sql2 = mysqli_query($conn, "SELECT * FROM visitors WHERE email = '{$email}'");
                if(mysqli_num_rows($select_sql2)>0){
                    $result = mysqli_fetch_assoc($select_sql2);
                    $_SESSION['unique_id'] = $result['unique_id'];
                    echo "<script>alert('success')</script>";
                    header('location: ../quotes.php');
                }
                else{
                    echo "This emai adress not exist!";
                }
            }else{
                echo "Something went wrong. Please try again!";
            }
        }
    }else{
        echo "$email is not valid email!";
    }

}else{
    echo "All input fields are required!";
}

?>