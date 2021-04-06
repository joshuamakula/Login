<?php
    // start session
    session_start();

    // Redirect user
    header('location:login.php');

    $con = mysqli_connect('127.0.0.1', 'root', '123456789');
    mysqli_select_db($con, 'tutorial');

    $name = $_POST['user'];
    $pass = $_POST['password'];

    $s = "SELECT * FROM usertable WHERE name = '$name'";

    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    if($num == 1){
        echo "Username Already Taken";
    }else{
        $reg = "INSERT INTO usertable(name, password) VALUES ('$name', '$pass')";
        mysqli_query($con, $reg); 
        echo "Registration Successful";
    }

?>