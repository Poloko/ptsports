<?php

spl_autoload_register( 'app_psr4_autoloader' );

/**
 * An example of a project-specific implementation.
 *
 * @param string $class The fully-qualified class name.
 * @return void
 */
function app_psr4_autoloader($class) {
    // replace namespace separators with directory separators in the relative 
    // class name, append with .php
    $class_path = str_replace('\\', '/', $class);
    
    $file =  $_SERVER['DOCUMENT_ROOT'] . '/ptsports/src/classes/' . $class_path . '.php';

    // if the file exists, require it
    if (file_exists($file)) {
        require $file;
    }
}