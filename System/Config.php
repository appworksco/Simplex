<?php

/**
 * Create a constant that stores the file path.
 * Create a constant that defines the site name.
*/
$root = (isset($_SERVER['HTTPS']) ? "https://" : "http://") . $_SERVER['HTTP_HOST'];
$scriptName = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
define ('__ROOT__', $root . $scriptName);
define ('__ROOT_PATH__', realpath($_SERVER['DOCUMENT_ROOT'] . '/' . $scriptName));
define ('__SITE_NAME__', 'Simplex');

/**
 * Create a constant that stores the database credentials.
 * This information can be used in DBConnection.
*/
define ('__HOSTNAME__', '');
define ('__USERNAME__', '');
define ('__PASSWORD__', '');
define ('__DATABASE__', '');

class Config
{
    public function __construct()
    {
        // Create a new instance of the View class.
        $this->view = new View();

        // Create a new instance of the DBConnection class.
        $this->database = new DBConnection();
    }
}