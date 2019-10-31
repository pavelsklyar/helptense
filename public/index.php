<?php
    require_once "../app/autoload.php";

    $page = new app\base\Page();
    $app = new \app\App($page);

    $app->run();
    $page->generate();