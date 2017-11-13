<?php
require 'includes/header.php';


//echo count($errors);
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top:-20px;">


    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="images/st.jpg" style="width:1500px;height:654px;" alt="stress">
            <div class="carousel-caption" style="margin-left:75px;" >
                <div style="background-color:white;width:60%;margin-top:-450px;margin-left:150px;border-radius: 5px;opacity:0.8;" >
                    <form method="POST" action="login.php">
                        <div class="form-group" style="padding-top:25px;width:80%;margin-left:45px;padding-top:30px;">
                            <input name="username" type="text" class="form-control" id="usr" placeholder="Username"  autofocus>
                        </div>
                        <div class="form-group" style="padding-top:15px;width:80%;margin-left:45px;">
                            <input name="password" type="password" class="form-control" id="psw" placeholder="Password" autofocus>
                        </div>
                        <div class="form-group" style="padding-bottom:20px;">
                            <input type="submit" value="Submit">
                        </div>
                    </form>

                </div>

            </div>
        </div>
        <div class="item">
            <img src="images/prva.png" style="width:1500px;height:654px;" alt="Chania">
            <div class="carousel-caption" style="margin-left:75px;" >
                <div style="background-color:white;width:60%;margin-top:-450px;margin-left:150px;border-radius: 5px;opacity:0.8;" >
                    <form method="POST" action="login.php">
                        <div class="form-group" style="padding-top:25px;width:80%;margin-left:45px;padding-top:30px;">
                            <input name="username" type="text" class="form-control" id="usr" placeholder="Username"  autofocus>
                        </div>
                        <div class="form-group" style="padding-top:15px;width:80%;margin-left:45px;">
                            <input name="password" type="password" class="form-control" id="psw" placeholder="Password" autofocus>
                        </div>
                        <div class="form-group" style="padding-bottom:20px;">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="item">
            <img src="images/treta.png" style="width:1500px;height:654px;" alt="Flower">
            <div class="carousel-caption" style="margin-left:75px;" >
                <div style="background-color:white;width:60%;margin-top:-450px;margin-left:150px;border-radius: 5px;opacity:0.8;" >
                    <form method="POST" action="login.php">
                        <div class="form-group" style="padding-top:25px;width:80%;margin-left:45px;padding-top:30px;">
                            <input name="username" type="text" class="form-control" id="usr" placeholder="Username"  autofocus>
                        </div>
                        <div class="form-group" style="padding-top:15px;width:80%;margin-left:45px;">
                            <input name="password" type="password" class="form-control" id="psw" placeholder="Password" autofocus>
                        </div>
                        <div class="form-group" style="padding-bottom:20px;">
                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<?php require 'includes/footer.php'; ?>
