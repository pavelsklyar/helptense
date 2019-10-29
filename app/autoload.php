<?php

use app\Connector;

define('HOME', $_SERVER['DOCUMENT_ROOT'] . '/');
define('ROOT', HOME . '../');
define('CONFIG', ROOT . 'config/');
define('APP', ROOT . 'app/');
define('VIEWS', ROOT . 'views/');
define('LAYOUTS', VIEWS . 'layouts/');

require_once "App.php";
require_once "Connector.php";

Connector::requireFolder(APP . "base");
Connector::requireFolder(APP . "components");
Connector::requireFolder(APP . "controllers");
Connector::requireFolder(APP . "database");
Connector::requireFolder(APP . "model");
Connector::requireFolder(APP . "security");