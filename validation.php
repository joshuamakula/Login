<?php
    // start session
    session_start();

    $con = mysqli_connect('127.0.0.1', 'root', '123456789');
    mysqli_select_db($con, 'tutorial');

    $name = $_POST['user'];
    $pass = $_POST['password'];

    $s = "SELECT * FROM usertable WHERE name = '$name' && password = '$pass' ";

    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    if($num == 1){
        $_SESSION['username'] = $name;
        header('location:home.php');
    }else{
        header('location:login.php');
    }

?> 