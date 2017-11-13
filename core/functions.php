<?php

function logged_in(){
    return (isset($_SESSION['user_id'])) ? true:false;
}

function output($errors){
    $leng = count($errors);
    $output = array();
    for($i = 1; $i < $leng; $i++){
        $output[$i] = $errors[$i];
    }
    if($leng>1){
        return '<ul><li>' . implode('</li><li>', $output) . '</li></ul>';}
    else{
        return '';
    }
}

function login($username, $password){
    global $conn;
    $username = e($username);
    $password = $password;
    $result = $conn->prepare("SELECT id, username, password, work_id FROM manager WHERE username=:username AND password=:password");
    $result -> bindParam(':username',$username);
    $result -> bindParam(':password',$password);
    $result ->execute();
    $result = $result ->fetch(PDO::FETCH_ASSOC);
    return ($result) ? $result['id'] : false;
}

function e($data){
    return htmlspecialchars($data,ENT_QUOTES,'UTF-8');
}

function user_exist($username)
{
    $username = e($username);
    global $conn;
    $result = $conn->prepare("SELECT username FROM manager WHERE username = :username");
    $result->bindParam(':username', $username);
    $result->execute();
    $result = $result->fetch(PDO::FETCH_ASSOC);
    return ($result) ? true : false;
}


function user_data($user_id){
    global $conn;
    $user_id = (int)$user_id;
    $func_num_args = func_num_args();
    $func_get_args = func_get_args();
    if($func_num_args > 1){
        unset($func_get_args[0]);
        $fields = '`' . implode('`,`', $func_get_args) . '`';
        $result = $conn->query("SELECT $fields FROM manager WHERE id = '$user_id'")->fetch(PDO::FETCH_ASSOC);
        return $result;

    }
}




