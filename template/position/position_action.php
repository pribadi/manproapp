<?php

    include("../../connect.php");
    $name = $_POST['name'];

    $sql = "INSERT INTO position (name) VALUES ('$name')";

    $result = mysql_query($sql);

    if ($result) {
        header("Location: list_position.php");
    } else {
        echo "gagal";
    }

?>