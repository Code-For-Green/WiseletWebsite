<?php
    error_reporting(0);
    ini_set('display_errors', 0);

    require_once "../db_connect.php";
    $conn = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        $_SESSION['connect_error'] = "<span>An error was encountered trying to connect to the database.</span>";
        die("Connection failed");
        exit();
    }
    unset($_SESSION['connect_error']);
    $flow = $_GET["flow"];
    $date_now = date('Y-m-d H:i:s');
    $sql = "INSERT INTO dane(DateTime, Flow) VALUES('$date_now', '$flow')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo $conn->error;
    }

    $conn->close();
?>