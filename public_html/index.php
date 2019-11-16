<?php
/**
 * @var $routing \base\Routing
 */

    require_once "../app/autoload.php";

    $page = new app\base\Page();
    $app = new \app\App($page, $routing);

    $app->run();
    $page->generate();