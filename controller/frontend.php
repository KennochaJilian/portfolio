<?php

require('model/frontend.php'); 

function home(){
$msgSent = false; 
require('view/frontend/home.php');

}

function newMsg(){
    $msgSent = true; 
    newMsgAdded();
    require('view/frontend/home.php');    
}