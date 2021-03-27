<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: text/html; charset=UTF-8");

    $connect = mysqli_connect("localhost", "root", "", "webbase-exam");
    mysqli_set_charset($connect, "utf8");
    $result = mysqli_query($connect, "Select * From author");
    $json_array = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $json_array[] = $row;
    }

    echo json_encode($json_array);
?>
