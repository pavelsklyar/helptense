<?php

/**
 * @var $this \app\base\Page;
 * @var $info;
 */

$this->title = "Заголовок сайта";
$this->description = "Описание нашего сайта";
$this->keywords = "hello world, наш сайт, тупое говно, тупого говна";

?>

<div class="signature">
    <p class="sign-a">Быстро поможет с прошедшем
        временем в настоящем</p>
</div>

<form action="/search/" method="get">
    <input name="verb" placeholder="Введите глагол..." type="search">
    <button type="submit"><img class="search" src="/img/search_w.png"></button>
</form>