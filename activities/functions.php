<?php
// echo "functions file is loaded";

function url_for($script_path): string
{

    if ($script_path[0] != '/') {
        $script_path = "/" . $script_path;
    }
    return WWW_ROOT . $script_path;

}

function u($string = "")
{
    return urlencode($string);
}

function raw_u($string = "")
{
    return rawurlencode($string);
}

function h($string = "")
{
    return htmlspecialchars($string);
}

function error_404()
{
    header($_SERVER["SERVER_PROTOCOL"] . "404 Not found");
    exit();
}

function error_500()
{
    header($_SERVER["SERVER_PROTOCOL"] . "500  Internal server error");
    exit();
}


function redirect($location = ""){

    header("Location:".$location);
    exit();

}