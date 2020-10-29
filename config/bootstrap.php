<?php
use Symfony\Component\Dotenv\Dotenv;

require "vendor/autoload.php";

define('ROOT', dirname(__DIR__));
define('CONFIG', __DIR__);

$envfile = ROOT . "/.env";
if (file_exists($envfile)) {
    $dotenv = new Dotenv(true);
    $dotenv->load($envfile);
}
