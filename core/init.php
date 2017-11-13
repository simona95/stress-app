<?php
session_start();
ini_set('display_errors','on');

require 'variables.php';
require 'connection.php';
require 'functions.php';

    if(logged_in()){
        $session_user_id = $_SESSION['user_id'];
        $user_data = user_data($session_user_id, 'id', 'username', 'password', 'work_id');
    }

    $errors[] = array();

