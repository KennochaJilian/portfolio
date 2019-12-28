<?php
function dbConnect(){
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=portfolio;charset=utf8', 'root', 'Aranx@_1993');
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