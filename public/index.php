<?php
    require_once "../app/autoload.php";

    $page = new \base\Page();
    $app = new \app\App($page);

    $app->run();
    $page->generate();