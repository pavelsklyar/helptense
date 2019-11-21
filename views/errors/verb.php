<?php

/**
 * @var $page \app\base\Page;
 */

$page->setTitle("Глагол не найден! - HelpTense");

?>

<div class="content">
    
    <form action="/search/verb/" method="post">
        <input name="verb" placeholder="Введите глагол..." type="search">
        <button type="submit"><img class="search" src="/img/search_w.png"></button>
    </form>

    <div align="center" class="sign-verb">
        <p class="sign-p-not-up">глагол не найден</p>

<!--        <p class="sign-p-not-down">Возможно, вы имели в виду:</p>-->
<!--        <a href="" class="verb-found">Verb</a>-->
<!--        <a href="" class="verb-found">Verb</a>-->
<!--        <a href="" class="verb-found">Verb</a>-->
    </div>

</div>
