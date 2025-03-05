<?php


// start session
session_start();

//// constant config

// root path project
const BASE_PATH = __DIR__;


// current domain
// define("CURRENT_DOMAIN", currentDomain() . '/php_news/');
define("CURRENT_DOMAIN", currentDomain());
const DISPLAY_ERROR = true;

const DB_HOST = '127.0.0.1';
const DB_USERNAME = 'root';
const DB_DATABASE = 'php_news';
const DB_PASSWORD = '1289..//';

// include database & make connect
// require "Database/Database.php";
// $conn = new \Database\Database();
// require "Database/CreateDB.php";
// $db = new CreateDB();
// $db->run();
require "activities/Admin/AdminCategory.php";

//// helpers
function protocol(): string
{
    return stripos($_SERVER['SERVER_PROTOCOL'], 'https') === true ? 'https://' : 'http://';
}

function currentDomain(): string
{
    return protocol() . $_SERVER['HTTP_HOST'];
}

function currentURL(): string
{
    return currentDomain() . $_SERVER['REQUEST_URI'];
}


function assets($path): string
{
    $domain = trim(BASE_PATH . '/ ');
    return $domain . '/' . trim($path . '/ .');

}

function url($path): string
{
    $domain = trim(BASE_PATH . '/ ');
    return $domain . '/' . trim($path . '/ .');

}

function methodType()
{
    return $_SERVER['REQUEST_METHOD'];
}

function displayError($displayError): void
{
    if ($displayError) {

        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

    } else {

        ini_set('display_errors', 0);
        ini_set('display_startup_errors', 0);
        error_reporting(0);
    }
}


displayError(DISPLAY_ERROR);


global $flashMessage;
if (isset($_SESSION['flash_message'])) {
    $flashMessage = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);

}


function flashMessage($name, $value = null)
{

    if ($value === null) {
        global $flashMessage;
        $message = isset($flashMessage[$name]) ? $flashMessage[$name] : '';
        return $message;
    } else {

        $_SESSION['flash_message'][$name] = $value;

    }

}


// mini routing system
function uri($route = null, $controller = null, $method = null, $requestMethodType = 'GET')
{
    // current url array
    $current_url = explode('?', currentURL())[0];
    $current_url = str_replace(CURRENT_DOMAIN, ' ', $current_url);
    $current_url = trim($current_url, '/ ');
    $current_url_array = explode('/', $current_url);
    $current_url_array = array_filter($current_url_array);
    // reserved url array
    $reservedUrl = trim($route, '/ ');
    $reservedUrlArray = explode('/', $reservedUrl);
    $reservedUrlArray = array_filter($reservedUrlArray);
    // compare current_url_array & reservedUrlArray
    if (sizeof($current_url_array) != sizeof($reservedUrlArray) || methodType() != $requestMethodType) {
        return false;
    }
    // admin/category/create/{id} reserved
    // admin/category/create/2 get from request
    // find the parameter like id = 2
    $parameters = [];
    // find parameter with curly bracket in route
    // like {id} {slug}
    // for on each array item
    for ($key = 0; $key < sizeof($current_url_array); $key++) {

        // $reservedUrlArray[$key][strlen($reservedUrlArray[$key]) - 1] to get last character
        if ($reservedUrlArray[$key][0] == "{" && $reservedUrlArray[$key][strlen($reservedUrlArray[$key]) - 1] == "}")
        {
          array_push( $parameters,$reservedUrlArray[$key]);
          // compare each item route must be same
        } elseif ($reservedUrlArray[$key] !== $current_url_array[$key]) {
            return false;
        }
    }
    if(methodType() == "POST"){
        $request = isset($_FILES) ? array_merge($_POST,$_FILES) : $_POST;
        $parameters = array_merge([$request],$parameters);
    }
    // create new obj from class/controller belongs to current route
    // then execute

    $object = new $controller;

    call_user_func_array( array($object,$method),$parameters);
    exit();
}


function dd($var)
{
    echo "<pre/>";
    var_dump($var);
    exit();
}

// uri('admin/category/create', 'adminCategory', 'create'); example
// reserved uri/routes
// Admin is namespace in AdminCategory class
uri('admin/category', 'Admin\AdminCategory', 'index');

uri('admin/category/create', 'Admin\AdminCategory', 'create');
uri('admin/category/store', 'Admin\AdminCategory', 'store','POST');

uri('admin/category/show/{id}', 'Admin\AdminCategory', 'show');

uri('admin/category/edit/{id}', 'Admin\AdminCategory', 'edit');
uri('admin/category/update/{id}', 'Admin\AdminCategory', 'update','POST');

uri('admin/category/delete/{id}', 'Admin\AdminCategory', 'delete');

echo "404 - Page not found";




