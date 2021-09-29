<?php
require_once "db.php";
session_start();
$title=mysqli_real_escape_string($conn, $_POST['title']);
$text=mysqli_real_escape_string($conn, $_POST['text']);

if(!empty($title)&& !empty($text)){
    $sql = mysqli_query($conn, "INSERT INTO my_quote (unique_id, title, text) values('".$_SESSION['unique_id']."','{$title}','{$text}')");
    if($sql)
    echo "<script>alert('Success')</script>";
    header('location: ../quotes.php');
}



?>
