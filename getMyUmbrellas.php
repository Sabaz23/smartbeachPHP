<?php
    $db = "umbrellapp";
    $host = "localhost";
    $user = "root";
    $psw = "";
    $conn = new mysqli($host, $user, $psw, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $token = $_POST['token'];
    if($token != "admin")
        $sql = "SELECT uid, inizioprenotazione FROM umbrella WHERE token = '". $token ."'";
    else
        $sql = "SELECT uid, inizioprenotazione FROM umbrella";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        echo $row["uid"] . " " . $row["inizioprenotazione"] . ";";
    }
    $conn->close();
?>

