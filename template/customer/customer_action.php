<?php

    include("../../connect.php");

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "INSERT INTO customer (name,phone,address) VALUES ('$name','$phone','$address')";

    $result = mysql_query($sql);

    if ($result) {
        header("Location: list_customer.php");
    } else {
        echo "gagal";
    }

?>