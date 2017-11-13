<?php
require '../core/connection.php';
require '../core/functions.php';
require '../core/variables.php';
$error = 0;
if(!empty($_POST)){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $work_id = $_POST['work_id'];

    if(!empty($username) && !empty($password) && !empty($work_id)){
        $insert = $conn->prepare("INSERT INTO manager(username, password, work_id) VALUES(:username, :password, :work_id) ");

        $insert ->execute([':username'=>$username, ':password'=>$password, ':work_id'=>$work_id]);
        $error = 1;
    }else {
        $error = 2;
    }

}
?>
<?php include '../views/includes/header.php'; ?>



<div class="container-fluid" style="background-color:#f1f1f1;margin-top:-20px;position:relative;">
    <div style="width: 30%;min-height: 490px;">
        <div style="margin-top:150px; background-color: white; border-radius:7px;position:relative;top:-40px;left:800px;">
            <form method="post" action="" >
                <div class="form-group" style="padding-top:80px;padding-left:50px;padding-right:50px;">
                    <input name="username" type="text" class="form-control" id="usr" placeholder="Username" autofocus>
                </div>
                <div class="form-group" style="padding-top:10px;padding-left:50px;padding-right:50px;">
                    <input name="password" type="text" class="form-control" id="psw" placeholder="Password">
                </div>
                <div class="form-group" style="padding-top:10px;padding-left:50px;padding-right:50px;">
                    <input name="work_id" type="text" class="form-control" id="wrk" placeholder="Work_id">
                </div>
                <div class="form-group">
                    <div style="text-align:center;padding-bottom:50px;padding-top:15px;">
                        <input style="width:20%;height:40px; ;padding: 15px; background-color: #006dcc; border:0 none; cursor:pointer; -webkit-border-radius: 5px; border-radius: 5px; color:white;" type="submit" value="Add">
                    </div>
                </div>
            </form>

            <?php if($error == 1): ?>
                <div class="alert alert-success" style="text-align:center;">
                    <strong>Success!</strong>
                </div>
            <?php elseif($error==2): ?>
                <div class="alert alert-warning" style="text-align:center;">
                    <strong>Error has occured.</strong>
                </div>
            <?php endif; ?>

        </div>
    </div>
    <div style="position:absolute;top:140px;left:290px;">
        <img src="../images/human.png" alt="Human" style="width:300px;height:300px;">
    </div>
<?php include '../views/includes/footer.php';?>

