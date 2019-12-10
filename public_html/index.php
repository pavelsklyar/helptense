<?php
/**
 * @var $routing base\routing\Routing
 */

require_once "../app/autoload.php";

$page = new \base\Page();
$app = new \base\App($page, $routing);

$app->run();
$page->generate();