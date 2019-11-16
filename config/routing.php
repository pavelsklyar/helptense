<?php

use app\controllers\MainController;
use app\controllers\SearchController;
use app\controllers\VerbController;

$routing = new \base\Routing();

$routing->add('GET', '/', MainController::class, 'index');

$routing->add('POST', '/search/verb/', SearchController::class, 'verb');

$routing->add('GET', '/verbs/', VerbController::class, 'index');
$routing->add('GET', '/verb/{verb}/', VerbController::class, 'search');