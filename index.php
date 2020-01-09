<?php
    require('controller/frontend.php'); 

    if (isset($_GET['action'])){
        if($_GET['action'] == 'newMsg'){
            newMsg();   
        } elseif($_GET['action'] == 'projectView'){
            projectView(); 
        } elseif($_GET['action'] == 'mentions'){
            mentionsView(); 
        }
    }else{

        home();

    }