<?php

/**
 * @var $page \app\base\Page;
 */

$page->title = "HelpTense - быстро поможет с временами";
$page->description = "HelpTense - сайт, который поможет разобраться в английских временах и узнать формы глаголов.";
$page->keywords = "неправильные глаголы, английские глаголы";

?>

<div class="signature-main">
    <p class="sign-a">Быстро поможет с прошедшим временем в настоящем</p>
</div>

<form action="/search/verb/" method="post">
    <input name="verb" placeholder="Введите глагол..." type="search">
    <button type="submit"><img class="search" src="/img/search_w.png"></button>
</form>