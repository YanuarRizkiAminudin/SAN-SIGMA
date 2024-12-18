<?php

function consoleLog($from, $data)
{
    echo "<script>console.log('" . $from . ": " . $data . "' );</script>";
}

define('BASE', ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://") . $_SERVER["HTTP_HOST"] . str_replace("/public", "", dirname($_SERVER['SCRIPT_NAME'])));
define('BASE_URL', BASE . '/');
define('CSS', BASE . '/assets/css/');
define('JS', BASE . '/assets/js/');
define('IMG', BASE . '/assets/img/');
define('FONTS', BASE . '/assets/fonts/');
define('VIEWS', 'resources/views/');
define ('VENDOR', BASE . '/assets/vendor/');
