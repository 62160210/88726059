<link rel="stylesheet" type="text/css" href="style.css">
<center><h1><p class="text-primary">Success</p></center></h1>

<center><h2><form method="post" action="main_2.html">
        <input type="submit" value="Back">
    </form><h2></center><h2>
    <style>
        body{
            background-image: url("");
            background-size: cover;
        }
        </style>

<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "product";
    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
    $mysqli->set_charset("utf8");

    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    } else {
       
    }
    if(isset($_POST['upload']))
{
    $name = $_POST['nameBrand'];
    $detail = $_POST['detail'];
    $image = $_FILES['image']['name'];
    $target = "image/".basename($image);


    $sql = mysqli_query($mysqli,"INSERT INTO store_list VALUES ('$nameBrand', '$detail' , '$image')");
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
    }
}