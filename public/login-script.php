<?php
    session_start();

    require_once "db_connect.php";

    $connect = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($connect->connect_errno!=0){

        echo "DATABASE CONNECT ERROR";
        echo $connect->connect_errno;
    }else{
        $login = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email='$login' AND password='$password'";

        if ($result = @$connect->query($sql)){
            $count_users = $result->num_rows;
            if ($count_users==1){

                $row = $result->fetch_assoc();
                $_SESSION['name'] = $row['name'];


                header("Location: user.php");

                $result->free();
            }else{

            }
        }

        $connect->close();
    }

