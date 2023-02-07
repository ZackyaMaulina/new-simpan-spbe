<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('printr')) {
    function printr($var, $echo = TRUE)
    {
        $output = '<pre style="position:absolute; z-index: 10001; padding: 20px; background: #fff; top: 0; left: 0;">' . print_r($var, TRUE) . '</pre>';
        echo $output;
        return;
    }
}