<?php

require('model/frontend.php');
require_once 'vendor/autoload.php'; 

function home($msgSent=false){

$projectTable = projectsAllView();
require('view/frontend/home.php');


}

function newMsg(){
    $msgSent = true; 
    newMsgAdded();

$transport = (new Swift_SmtpTransport('smtp.free.fr', 25));
$mailer = new Swift_Mailer($transport);
// $logger = new Swift_Plugins_Loggers_EchoLogger();
//$mailer->registerPlugin(new Swift_Plugins_LoggerPlugin($logger));

$message = (new Swift_Message('Tu as reçu un message'))
  ->setFrom([$_POST['email'] => $_POST['name']])
  ->setTo(['codinaaranxa@gmail.com'])
  ->setBody('Tu as reçu un message de ton superbe site');
$result = $mailer->send($message);

home($msgSent);

}

function projectView(){   
    $projectInfo = projectViewInfos($_GET['id']);
    require('view/frontend/projectView.php');
}

function mentionsView(){
  require('view/frontend/mentions.php');
}