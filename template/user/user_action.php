<?php

    include("../../connect.php");

    // echo "<pre>";
    // print_r($_POST);
    // exit();
    mysql_select_db("manpro");

    $employee = $_POST['employee'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $place = $_POST['place'];
    $date_birth = $_POST['date_birth'];
    $status = $_POST['status'];
    $sex = $_POST['sex'];
    $religion = $_POST['religion'];
    $role = $_POST['role'];
    $position = $_POST['position'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "INSERT INTO user (employee,fullname,email,place,date_birth,status,sex,religion,role,position,phone,address) VALUES ('$employee','$fullname','$email','$place','$date_birth','$status','$sex','$religion','$role','$position','$phone','$address')";

    $result = mysql_query($sql);

    if ($result) {
        header("Location: user_list.php");
    } else {
        echo "gagal";
    }


?>