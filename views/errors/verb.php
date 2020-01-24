<?php

/**
 * @var $page base\Page;
 */

$page->title = ("Глагол не найден! - HelpTense");

?>

<div class="content">

    <div class="search">
        <form action="/search/verb/" method="post">
            <input class="search-input" placeholder="Введите глагол" type="text" name="verb">
            <button class="search-submit" type="submit"></button>
        </form>
    </div>

    <div align="center" class="sign-verb">
        <p class="sign-p-not-up">глагол не найден</p>

<!--        <p class="sign-p-not-down">Возможно, вы имели в виду:</p>-->
<!--        <a href="" class="verb-found">Verb</a>-->
<!--        <a href="" class="verb-found">Verb</a>-->
<!--        <a href="" class="verb-found">Verb</a>-->
    </div>

</div>
