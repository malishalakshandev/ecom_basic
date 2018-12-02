<?php 

// ob_start() This function will turn output buffering on. 
// While output buffering is active no output is sent from the script 
ob_start();
session_start();
// session_destroy();

// define directory separator (\ -> windowns, / -> mac) according to the installed os server
defined("DS") ? null : define("DS", DIRECTORY_SEPARATOR);
 
 // define constant directory path for both front end back end
defined("TEMPLATE_FRONT") ? null : define("TEMPLATE_FRONT", __DIR__  . DS . "templates".DS."front");
defined("TEMPLATE_BACK") ? null : define("TEMPLATE_BACK", __DIR__  . DS . "templates".DS."back");
defined("UPLOAD_DIRECTORY") ? null : define("UPLOAD_DIRECTORY", __DIR__  . DS . "uploads");


// define the database connection values and mysqli connection
defined("DB_HOST") ? null : define("DB_HOST","localhost");
defined("DB_USER") ? null : define("DB_USER","root");
defined("DB_PASS") ? null : define("DB_PASS","");
defined("DB_NAME") ? null : define("DB_NAME","ecom_basic_db");

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

// call to fucntions.php file
require_once("functions.php");


?> 