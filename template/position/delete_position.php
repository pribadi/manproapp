<?php
    include("../../connect.php");

    mysql_select_db("manpro");
    mysql_query("DELETE FROM position WHERE id = '$_GET[id]'");
    echo "<script>window.alert('Data Berhasil Dihapus');</script>";
    echo "<script>window.location = 'list_position.php';</script>";
?>