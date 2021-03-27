<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: text/html; charset=UTF-8");

    $authorID = $_GET['authorID'];
    $connect = mysqli_connect("localhost", "root", "", "webbase-exam");
    mysqli_set_charset($connect, "utf8");
    $result = mysqli_query($connect, "DELETE FROM author WHERE authorID = '$authorID'");
    header("location: show_author.html");


?>