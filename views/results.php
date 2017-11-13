<?php require 'includes/header.php'; ?>
<div class="container-fluid" style="background-color:white;margin-top:-20px;min-height:650px;">
    <div class="container">
        <div>
            <h3 style="text-align:center;padding-top:30px;padding-bottom:20px;">User: <?php echo $name;?></h3>
        </div>
        <div style="background-color:#f6f6f6;width:70%;margin:auto;">
            <table class="table pagination-centered" style="width:100%;">
                <thead>
                <tr>
                    <th style="text-align:center;font-size: 20px;">Score</th>
                    <th style="text-align:center;font-size: 20px;">Date</th>
                </tr>
                </thead>
                <tbody>


            <?php foreach($user as $result):?>

                <tr>
                    <td><?php echo $result['result'];?></td>
                    <td><?php echo $result['date'];?></td>
                </tr>

            <?php endforeach; ?>

                </tbody>
            </table>
        </div>
        <div style="width:70%;margin:auto;">
            <hr>
            <a class="btn btn-primary pull-right" style="margin-left:20px;" href="logout.php">Log out</a>
            <a class="btn btn-success" href="index.php">Go Back</a>
        </div>
    </div>
</div>
<?php require 'includes/footer.php'; ?>
