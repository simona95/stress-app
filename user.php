<?php
require 'core/init.php';

$id = $_GET['id'];
$name = $_GET['name'];

$user = $conn->prepare("SELECT date, result FROM results WHERE idd=:id  ORDER BY date DESC");
$user ->bindParam(':id',$id);
$user ->execute();
$user = $user ->fetchAll(PDO::FETCH_ASSOC);

require 'views/results.php';


