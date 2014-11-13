<?php
    include("../../connect.php");

    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $query = mysql_query("UPDATE customer SET name='$name', phone='$phone', address='$address' WHERE id='$id'") OR DIE(mysql_error());

    if ($query) {
        echo "<script>window.alert('Data Berhasil Diupdate');</script>";
        echo "<script>window.location = 'list_customer.php';</script>";
        // header('Location:list_position.php?message=success');
    }


?>