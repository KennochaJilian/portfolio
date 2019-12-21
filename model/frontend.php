<?php
function dbConnect(){
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=BDAG;charset=utf8', 'root', 'Aranx@_1993');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}