<?php  
/*
********************************************************
* Main page -- Employee Self Service App              *   
* Author:  Rabah Djanati                               *   
* Purpose:  Architect challenge                        *   
* ©2018 CBC/Radio-Canada. All rights reserved.         *
********************************************************
*/

require( "model/business.php");
require(SMARTY_DIR.'Smarty.class.php');

session_start();  
$username = $_SESSION["username"];

// user is redirected to the login page if he's not authenticated
if(!isset($username))  
{  
   header("location:index.php");  
}

// API calls to bussiness layer
$salary = getSalary($username);
$benefits = getBenefitsList($username);
$vacation = getRemainingVacation($username);

// display main page
$smarty = new smarty();
$smarty->template_dir = 'view/templates';
$smarty->compile_dir = 'view/templates_c';
$smarty->assign('salary', $salary); 
$smarty->assign('vacation', $vacation); 
$smarty->assign('benefits', $benefits); 
$smarty->assign('username', $username); 
$smarty->display("main.tpl");

?>