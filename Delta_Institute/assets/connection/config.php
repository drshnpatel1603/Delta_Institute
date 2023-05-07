<?php

    $conn = mysqli_connect('localhost','root','','uni_manage');

    if(!$conn){
        die("Connection failed: ".mysqli_connect_errno());
    }
?>