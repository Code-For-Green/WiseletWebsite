<?php
    $servername = "localhost";
    $username = $_GET["user"];
    $password = $_GET["pass"];
    $dbname = "$249391552_0000017";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO dane (flow, DateTime) VALUES ('$_GET["flow"]', 'date()')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?>