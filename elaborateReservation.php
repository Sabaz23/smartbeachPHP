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
    $inizioprenotazione = $_POST['inizioprenotazione'];
    $uid = $_POST['uid'];
    if($token != "null")
        $sql = "UPDATE umbrella set token = '". $token ."', inizioprenotazione = '". $inizioprenotazione ."' WHERE uid = ". $uid;
    else
        $sql = "UPDATE umbrella set token = null, inizioprenotazione = null WHERE uid = ". $uid;
    $result = $conn->query($sql);
    $conn->close();
?>