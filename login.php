<?php

include 'core/init.php';

if(isset($_POST)){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(empty($username) || empty($password)){
        $errors[] = "Username and password are required";
    }else if(!user_exist($username)){
        $errors[] = "That user does not exist";
    }else {
        $log = login($username, $password);
        if(!$log){
            $errors[] = "Username/Password combination is incorrect";
        }else {
            $_SESSION['user_id'] = $log;
            header('Location: index.php');
            exit();
        }
    }
}


if(count($errors) > 1){
    require 'views/login.php';
}