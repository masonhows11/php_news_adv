<?php
ob_start();


//
// __FILE__ returns the current path to this file
//  dirname() returns the current to the parent directory
define("PRIVATE_PATH", dirname(__FILE__));
// in PROJECT_PATH const by dirname() with PRIVATE_PATH parameter means get top level path
// returns c:\laravel\wwww\glob_bank -> its root project path
define("PROJECT_PATH", dirname(PRIVATE_PATH));
const PUBLIC_PATH = PROJECT_PATH . "/public";
const SHARED_PATH = PRIVATE_PATH . "/shared";
// only functions.php file once time loaded
require_once('functions.php');



$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
// for get relative path -> /public
define("WWW_ROOT", $doc_root);
