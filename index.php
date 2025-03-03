<?php


// start session
session_start();

//// constant config

// root path project
const BASE_PATH = __DIR__;


// current domain
define("CURRENT_DOMAIN", currentDomain() . '/php_news/');
const DISPLAY_ERROR = true;

const DB_HOST = '127.0.0.1';
const DB_USERNAME = 'root';
const DB_DATABASE = 'php_news';
const DB_PASSWORD = '1289..//';

//// helpers

function protocol(): string
{
    return stripos($_SERVER['SERVER_PROTOCOL'], 'https') === true ? 'https://' : 'http://';
}

function currentDomain(): string
{
    return protocol() . $_SERVER['HTTP_HOST'];
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

function currentURL(): string
{
    return currentDomain() . $_SERVER['REQUEST_URI'];
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
if (isset($_SESSION['flash_message']))
{
    $flashMessage = $_SESSION['flash_message'];
    unset($_SESSION['flash_message']);

}


function flashMessage($name,$value = null)
{

    if($value === null){
        global $flashMessage;
        $message = isset($flashMessage[$name])  ?  $flashMessage[$name] : '';
        return $message;
    }else{
        $_SESSION['flash_message'][$name] = $value;
    }

}

// flashMessage('test','test value');
// echo  flashMessage('test');





