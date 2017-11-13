<?php

require 'core/init.php';
    if(logged_in()){
        require 'views/show.php';
    }else {
        require 'views/login.php';
    }