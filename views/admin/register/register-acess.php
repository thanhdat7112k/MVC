<?php
    session_start();
    if($_POST)
    {
        $error = [];
        if(strlen($_POST['firstName']) == 0)
        {
            $error['firstName'] = "first name is required";
        }

        if(strlen($_POST['lastName']) == 0)
        {
            $error['lastName'] = "last name is required";
        }

        if(strlen($_POST['username']) == 0)
        {
            $error['username'] = "user name is required";
        }

        if(strlen($_POST['email']) == 0)
        {
            $error['email'] = "email is required";
        } 
        else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error['email'] = "email not true";
        }

        if($error)
        {
            $_SESSION['error'] = $error;
            $_SESSION['old'] = $_POST;
            header(('location: index.php'));
            exit();
        }

        // $_SESSION('user') = $_POST;
        header('location: /admin/login/index.php');
        exit();
    }
    else {
        header('location: /admin/register/index.php');
        exit();
    }