<?php 
$title = 'Codina Aranxa'; 
?>
<?php ob_start(); ?>
<?php 
require('navbar.php'); 
require('welcome.php');
require('aboutMe.php');
require('project.php');
require('contactMe.php'); 

?>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>