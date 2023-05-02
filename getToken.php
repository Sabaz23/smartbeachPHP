<?php
    $db = "umbrellapp";
    $user = "root";
    $pass = "";
    $host = "localhost";
    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $query = "SELECT token, inizioprenotazione FROM umbrella WHERE uid = " . $_POST['uid'];
    if($result = $conn->query($query)){
        while ($row = $result->fetch_assoc()) {
            echo $row['token'] . " " . $row['inizioprenotazione'];
        }
    }
    $conn->close();


?>