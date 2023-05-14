<?php

/**
 * The new Simplex() statement creates a new instance of the Simplex class.
 * The Simplex class is the main class of the application.
*/
spl_autoload_register(function ($className)
{
    if (file_exists('System/' . $className . '.php'))
    {
        require_once 'System/' . $className . '.php';
    }
    elseif (file_exists('Controllers/' . $className . '.php'))
    {
        require_once 'Controllers/' . $className . '.php';
    }
    elseif (file_exists('Models/' . $className . '.php'))
    {
        require_once 'Models/' . $className . '.php';
    }
    elseif (file_exists($className . '.php'))
    {
        require_once $className . '.php';
    }
});

new Simplex();