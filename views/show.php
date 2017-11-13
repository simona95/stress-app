<?php require 'includes/header.php'; ?>
<?php
    $users = $conn->prepare("SELECT id, first_name, last_name FROM users WHERE users.work_id=:work_id");
    $users ->bindParam(':work_id',$user_data['work_id']);
    $users ->execute();
    $users = $users->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container-fluid" style="background-color:white;margin-top:-20px;min-height:650px;">
    <div class="container">
        <h3 style="text-align:center;padding-top:30px;padding-bottom:20px;">Results: </h3>
        <div style="background-color:#f6f6f6;width:70%;margin:auto;">
            <table class="table pagination-centered" style="width:100%;">
                <thead>
                <tr>
                    <th  style="text-align:center;font-size: 20px;">Name</th>
                    <th  style="text-align:center;font-size: 20px;">Surname</th>
                    <th  style="text-align:center;font-size: 20px;">Details</th>
                </tr>
                </thead>
                <tbody>
            <?php foreach($users as $user):?>

            <tr>
               <td><?php echo $user['first_name'];?></td>
               <td><?php echo $user['last_name'];?></td>
               <td><a class="btn btn-primary" href="user.php?id=<?php echo $user['id'];?>&name=<?php echo $user['first_name']; ?>">Details</a> </td>
            </tr>

            <?php endforeach; ?>
                </tbody>
            </table>

        </div>
        <div style="margin:auto;text-align:center;"><hr><a class="btn btn-primary" style="border-radius: 50%;height:80px;width:80px;padding-top:30px;" href="logout.php">Log out</a></div>
    </div>
</div>

<?php require 'includes/footer.php'; ?>