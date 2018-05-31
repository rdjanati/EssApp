<?php  
/*
********************************************************
* Logout page -- Employee Self Service App              *   
* Author:  Rabah Djanati                               *   
* Purpose:  Architect challenge                        *   
* ©2018 CBC/Radio-Canada. All rights reserved.         *
********************************************************
*/
 session_start();  
 session_destroy();  
 header("location:index.php");  
?>  