<?php
    require('controller/frontend.php'); 

    if (isset($_GET['action'])){
        if($_GET['action'] == 'newMsg'){
            newMsg();   
        }
    }else{

        home();

    }