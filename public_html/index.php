<?php
/**
 * @var $routing base\routing\Routing
 */

require_once "../app/autoload.php";

$app = new base\App($routing);
$page = new base\Page();
$app->setPage($page);

$app->run();
$page->generate();