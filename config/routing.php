<?php

use app\controllers\AuthController;
use app\controllers\MainController;
use app\controllers\SearchController;
use app\controllers\VerbController;

$routing = new \base\routing\Routing();

$routing->add('GET', '/',  MainController::class, 'index');
$routing->add("GET", '/tense/', MainController::class, 'tense');
$routing->add("GET", '/grammar/', MainController::class, 'grammar');

$routing->add('POST', '/search/verb/', SearchController::class, 'verb');

$routing->add('GET', '/verbs/', VerbController::class, 'all');
$routing->add('GET', '/irregular/{verb}/', VerbController::class, 'irregular');
$routing->add('GET', '/phrasal/{verb}/', VerbController::class, 'phrasal');

$routing->add("GET", '/auth/', AuthController::class, 'index');
$routing->add('POST', '/auth/login/', AuthController::class, 'login');
$routing->add('POST', '/auth/register/', AuthController::class, 'register');