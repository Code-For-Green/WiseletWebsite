<?php
    session_start();
    error_reporting(0);
    ini_set('display_errors', 0);

    require_once "../db_connect.php";

    $conn = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        $_SESSION['connect_error'] = "<span>An error was encountered trying to connect to the database.</span>";
        die("Connection failed");
        exit();
    }
    $sql = "SELECT * FROM dane";
    $result = $conn->query($sql);

    $rows = array();
    while($r = $result->fetch_assoc()) {
      $rows[] = $r;
    }
    echo json_encode($rows);

    $conn->close();
?>