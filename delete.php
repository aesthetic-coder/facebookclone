<?php
    $con = mysqli_connect('localhost','root','','facebookclone');
    $phoneoremail = $_POST['phoneoremail'];

    $check = mysqli_query($con,"DELETE FROM userdata WHERE phoneoremail = '$phoneoremail'");

    if($check > 0){
        header("Location:http://localhost/FacebookLogin/mainpage.html");
    }else{
        header("Location:http://localhost/FacebookLogin");
    }

?>