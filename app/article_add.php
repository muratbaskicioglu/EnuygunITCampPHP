<?php

    require_once("../config.php");

    extract($_POST);

    $image = $_FILES['name'];

    if(!move_uploaded_file($_FILES['tmp_name'], "images/" . $_FILES['name'])) {
        header("Location: ");
    }

    $query = "insert into posts(title, content, image, is_active) values($title, $content, $image, $is_active)";
    $result = mysqli_query($connection, $query);

    if($result) {
        echo "Article successfully added.";
    } else {
        echo "Error!";
    }

?>