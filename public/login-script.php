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

        $login = htmlentities($login, ENT_QUOTES, "UTF-8");
        $password = htmlentities($password, ENT_QUOTES, "UTF-8");


        //$sql = "SELECT * FROM users WHERE email='$login' AND password='$password'";

        if ($result = @$connect->query(
            sprintf("SELECT * FROM users WHERE email='%s' AND password='%s'",
            mysqli_real_escape_string($connect,$login),
            mysqli_real_escape_string($connect,$password))
        )){

            $count_users = $result->num_rows;
            if ($count_users==1){

                $_SESSION['islogin'] = true;

                $row = $result->fetch_assoc();
                $_SESSION['name'] = $row['name'];

                unset($_SESSION['error']);
                header("Location: user.php");

                $result->free();
            }else{
                $_SESSION['error'] = "<span> Incorrect login or password, try again. </span>";
                header("Location: login.php");
            }
        }

        $connect->close();
    }

