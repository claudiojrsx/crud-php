<?php

require_once 'controller/config.php';

spl_autoload_register('ligarClasses');

function ligarClasses($nameClass) {
    if (file_exists('controller/' . $nameClass . '.php')) {
        require_once 'controller/' .$nameClass . '.php';
    }
}
