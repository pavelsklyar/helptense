<?php

use app\controllers\AuthController;
use app\controllers\MainController;
use app\controllers\SearchController;
use app\controllers\VerbController;
use controllers\ApiController;

$routing = new \base\routing\Routing();

$routing->add('GET', '/', 'common', MainController::class, 'index');
$routing->add("GET", '/tense/', 'common', MainController::class, 'tense');
$routing->add("GET", '/grammar/', 'common', MainController::class, 'grammar');

$routing->add('POST', '/search/verb/', 'common', SearchController::class, 'verb');

$routing->add('GET', '/verbs/', 'common', VerbController::class, 'all');
$routing->add('GET', '/irregular/{verb}/', 'common', VerbController::class, 'irregular');
$routing->add('GET', '/phrasal/{verb}/', 'common', VerbController::class, 'phrasal');

$routing->add("GET", '/auth/', 'common', AuthController::class, 'index');
$routing->add('POST', '/auth/login/', 'common', AuthController::class, 'login');
$routing->add('POST', '/auth/register/', 'common', AuthController::class, 'register');


/** API FOR MARTY */

$routing->add('POST', '/verbs/create/', 'api', ApiController::class, 'verbsCreate');
$routing->add('POST', '/verbs/update/', 'api', ApiController::class, 'verbsUpdate');
$routing->add('POST', '/verbs/delete/', 'api', ApiController::class, 'verbsDelete');

$routing->add('POST', '/users/create/', 'api', ApiController::class, 'usersCreate');
$routing->add('POST', '/users/update/', 'api', ApiController::class, 'usersUpdate');
$routing->add('POST', '/users/delete/', 'api', ApiController::class, 'usersDelete');