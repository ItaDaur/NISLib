<?php

    require_once('connection.php');

    if (isset($_POST["btn-save"])) {

        $UserName = mysqli_real_escape_string($con,$_POST['UserName']);
        $Password = mysqli_real_escape_string($con,$_POST['Password']);

        if (empty($UserName) || empty($Password)) {
            echo 'Please fill in the form';
        } else {
            $Pass = md5($Password);
            $sql = "insert into users (UName, Password) values('$UserName','$Pass')";
            $result = mysqli_query($con,$sql);

            if ($result) {
                echo 'Your record has been saved in the database';
            } else {
                echo 'Please check your query';
            }
        }

    }

?>
