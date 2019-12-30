<?php

require('model/frontend.php'); 

function home(){
$msgSent = false; 
$projectTable = projectsAllView();
require('view/frontend/home.php');

}

function newMsg(){
    $msgSent = true; 
    newMsgAdded();
    require('view/frontend/home.php');    
}

function projectView(){   
    $projectInfo = projectViewInfos($_GET['id']);
    require('view/frontend/projectView.php');
}