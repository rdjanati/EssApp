<?php
/*
********************************************************
* Utility methods -- Employee Self Service App         *   
* Author:  Rabah Djanati                               *   
* Purpose:  Architect challenge                        *   
* ©2018 CBC/Radio-Canada. All rights reserved.         *
********************************************************
*/

require "../../conf/config.inc";

// Common functions
function initDB($databaseuser, $databasepasswd, $databasename){
  $db = NULL;
  if (!($db = @mysqli_connect("localhost", $databaseuser, $databasepasswd,$databasename))){
  	  
      die("Could not connect to database.");
  }
  return $db;
}

?>
