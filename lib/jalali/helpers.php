<?php

if (! function_exists('jdate')) {

    /**
     * @param string $str
     * @return string
     */
    function jdate($str = null)
    {
        return src\Jalalian::forge($str)->format('%B %d, %Y');
    }
}