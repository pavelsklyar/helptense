<?php

/**
 * @var $page \app\base\Page;
 */

$page->title = "HelpTense - быстро поможет с временами";
$page->description = "HelpTense - сайт, который поможет разобраться в английских временах и узнать формы глаголов.";
$page->keywords = "неправильные глаголы, английские глаголы";

?>

<div class="tagline">
    БЫСТРО ПОМОЖЕТ С ПРОШЕДШИМ ВРЕМЕНЕМ В НАСТОЯЩЕМ
</div>
<div class="search">
    <form action="/search/verb/" method="post">
        <input class="search-input" placeholder="Введите глагол" type="text" name="verb">
        <button class="search-submit" type="submit"></button>
    </form>
</div>