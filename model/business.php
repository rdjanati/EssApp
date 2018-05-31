<?php
/*
********************************************************
* business methods -- Employee Self Service App         *   
* Author:  Rabah Djanati                               *   
* Purpose:  Architect challenge                        *   
* ©2018 CBC/Radio-Canada. All rights reserved.         *
********************************************************
*/

require( "model/dbutils.php");

function isUserValid($username, $password){
  global $databaseuser;
  global $databasepasswd;
  global $databasename;
  $db = initDB($databaseuser, $databasepasswd, $databasename);
  $returnValue = false;
  $username = mysqli_real_escape_string($db, $username);  
  $password = mysqli_real_escape_string($db, $password);    
  // password is md5 encrypted
  $password = md5($password);  
  $query = "SELECT * FROM `users` WHERE `username`=\"".$username."\" AND `password`=\"".$password."\"";
  $result = mysqli_query($db, $query);  
  if (!$result || mysqli_num_rows($result) == 0){  
      $returnValue = false;
  }  
  else{  
      $returnValue = true;
  } 
  
  @mysql_close($db);
  return $returnValue;
}

function getSalary($username){
	
  return "45 K";
}

function getBenefitsList($username){
  $benefits = array();
  array_push($benefits, "Group Insurance");
  array_push($benefits, "Group Savings & Retirement");
  array_push($benefits, "Wellness Program");
  return $benefits;
}

function getRemainingVacation($username){
	
  return "15 days";
} 

?>
