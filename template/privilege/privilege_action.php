<?php

    include("../../connect.php");

    $uri = $_POST['uri'];

    $sql = "INSERT INTO privilege (uri) VALUES ('$uri')";

    $result = mysql_query($sql);

    if ($result) {
        header("Location: list_privilege.php");
    } else {
        echo "gagal";
    }

?>