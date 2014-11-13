<?php
    include("../../connect.php");

    $id = $_POST['id'];
    $name = $_POST['name'];

    $query = mysql_query("UPDATE position SET name='$name' WHERE id='$id'") OR DIE(mysql_error());

    if ($query) {
        echo "<script>window.alert('Data Berhasil Diupdate');</script>";
        echo "<script>window.location = 'list_position.php';</script>";
        // header('Location:list_position.php?message=success');
    }


?>