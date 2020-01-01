<?php

function dbConnect(){
    require ('config.php'); 
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', $mdpDataBase);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}

function newMsgAdded(){
    $db = dbConnect(); 
    $req = $db->prepare("INSERT INTO msg (optionMsg,name, email, content, creation_date) VALUE (?,?,?,?, now())");
    $req ->execute(array($_POST['optionMsg'],$_POST['name'], $_POST['email'],$_POST['content']));
    
}
function projectsAllView(){
    $db = dbConnect(); 
    $req = $db->prepare("SELECT * FROM project");
    $req ->execute(); 
    $projectAllInfos = $req->fetchAll();
    return $projectAllInfos; 
}

function projectViewInfos($id){
    $db = dbConnect(); 
    $req = $db->prepare("SELECT * FROM project WHERE id = ? ");
    $req ->execute(array($id));
    $projectInfo = $req->fetch();

    return $projectInfo;

}