<?php

// set database server access variables: 
$host = "localhost"; 
$user = "root"; 
$pass = "12345"; 
$db = "DBName"; 

// open connection 
$connection = mysql_connect($host, $user, $pass) or die ("Unable to connect!"); 

if (!$connection)
  {
  die('Could not connect: ' . mysql_error());
  }

// select database 
mysql_select_db($db) or die ("Unable to select database!");

?>