<?php
/*
********************************************************
* Index page -- Employee Self Service App              *   
* Author:  Rabah Djanati                               *   
* Purpose:  Architect challenge                        *   
* ©2018 CBC/Radio-Canada. All rights reserved.         *
********************************************************
*/

require( "model/business.php");
require(SMARTY_DIR.'Smarty.class.php');

session_start();

// display login page
$smarty = new smarty();
$smarty->template_dir = 'view/templates';
$smarty->compile_dir = 'view/templates_c';
$smarty->display("index.tpl");

if (isset($_POST['login_action'])&&$_POST['login_action']=='checkUser') {
	  
    if(empty($_POST["txtUsername"]) || empty($_POST["txtPassword"])) {  
       echo '<script>alert("Both Fields are required")</script>';  
    }  
    else {
	   $username = $_POST["txtUsername"];  
       $password = $_POST["txtPassword"]; 
       // check if user credentials are valid.
	   if (isUserValid($username, $password)){
           $_SESSION['username'] = $username;  
           echo "<script>location.href='main.php';</script>";
	   }
       else{
		   echo '<script>alert("Wrong Username or Password")</script>';
		   //logging example
           error_log($strDate."index.php#Main "."UserName= ". $_POST['txtUsername']. "; failed access attempt"."\n", 3, _LOGFILE);
	   }
	}
}	 
?>