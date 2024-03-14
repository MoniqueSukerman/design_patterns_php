<?php

spl_autoload_register(function ($className) {
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $file = __DIR__ . DIRECTORY_SEPARATOR . $classPath . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
});
