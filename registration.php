<?php
    session_start();

    $con = mysqli_connect('localhost', 'root', '123456789');
    mysqli_select_db($con, 'tutorial');

    $name = $_POST['user'];
    $pass = $_POST['password'];

    $s = "SELECT * FROM usertable WHERE name = '$nam]";

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