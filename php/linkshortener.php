<?php
    include("dbconnect.php");
    session_start();
    if(isset($_POST['link-short-submit'])){
        $link = $_POST['link-input'];

        if(empty($link)){
            header("Location:../index.php?error=Please Fill The Link FIrst");
            exit();
        }
        else{
            $shrt_link = substr(md5($link.mt_rand()),0,5);
            $date = date('Y/m/d');
            $sql = "INSERT INTO guest_links(link,shrt_link,created_date) VALUES('".$link."','".$shrt_link."','".$date."')";
            $result = mysqli_query($conn,$sql);
            if($result){
                $_SESSION['link'] = $link;
                $_SESSION['shrt_link'] = $shrt_link;
                header("Location:../index.php?link_shrt=Succesfull!");
            }
            else{
                header("Location:../index.php?error=Database not inserted");
                exit();
            }
        }
    }

?>