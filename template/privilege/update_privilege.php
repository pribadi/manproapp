<?php
    include("../../connect.php");

    $id = $_POST['id'];
    $uri = $_POST['uri'];

    $query = mysql_query("UPDATE privilege SET uri='$uri' WHERE id='$id'") OR DIE(mysql_error());

    if ($query) {
        echo "<script>window.alert('Data Berhasil Diupdate');</script>";
        echo "<script>window.location = 'list_privilege.php';</script>";
        // header('Location:list_position.php?message=success');
    }


?>