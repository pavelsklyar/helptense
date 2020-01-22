<?php

/**
 * @var $page Page;
 * @var $model Verb;
 */

$page->title = ucfirst($model->getFirstForm()) . " - HelpTense";
$page->description = "HelpTense - сайт, который поможет разобраться в английских временах и узнать формы глаголов.";
$page->keywords = "неправильные глаголы, английские глаголы";

use app\model\Verb;
use base\Page; ?>

<div class="content">

    <div class="search">
        <form action="/search/verb/" method="POST">
            <input class="search-input" placeholder="Введите глагол" type="text" name="verb">
            <button class="search-submit" type="submit"></button>
        </form>
    </div>

    <div class="sign-verb">
            <a class="sign-a"><?= $model->getFirstForm() ?></a>
            <p class="sign-p">[...], <?= $model->getTranslate() ?></p>
        </div>

    <table class="table-verb">
            <tr>
                <th>Время</th>
                <th>Present</th>
                <th>Past</th>
                <th>Perfect</th>
            </tr>
            <tr>
                <th>Глагол</th>
                <td align="center" class="color-back"><b class="color-text"><?= $model->getFirstForm() ?></b></td>
                <td align="center" class="color-back"><b class="color-text"><?= $model->getSecondForm() ?></b></td>
                <td align="center" class="color-back"><b class="color-text"><?= $model->getThirdForm() ?></b></td>
            </tr>
            <tr>
                <th>3 лицо ед.ч.</th>
                <td align="center">
                    <?= $model->getFirstFormExampleSingle(); ?>
<!--                    He <b class="color-text">does</b> exercises every morning-->
                </td>
                <td align="center">
                    <?= $model->getSecondFormExampleSingle(); ?>
<!--                    He <b class="color-text">did</b> exercises yesterday morning-->
                </td>
                <td align="center">
                    <?= $model->getThirdFormExampleSingle(); ?>
<!--                    He has already <b class="color-text">done</b> exercises-->
                </td>
            </tr>
            <tr>
                <th>1 лицо, 2 лицо, 3 лицо мн.ч.</th>
                <td align="center">
                    <?= $model->getFirstFormExampleMultiple(); ?>
<!--                    We usually <b class="color-text">do</b> our homework-->
                </td>
                <td align="center">
                    <?= $model->getSecondFormExampleMultiple(); ?>
<!--                    We <b class="color-text">did</b> our homework last weekend-->
                </td>
                <td align="center">
                    <?= $model->getThirdFormExampleMultiple() ?>
<!--                    We have already <b class="color-text">done</b> our homework yet-->
                </td>
            </tr>
            <tr>
                <th>Отрицание</th>
                <td align="center">
                    <?= $model->getFirstFormExampleNegative(); ?>
<!--                    She doesn't <b class="color-text">do</b> a job every day-->
                </td>
                <td align="center">
                    <?= $model->getSecondFormExampleNegative(); ?>
<!--                    She didn't <b class="color-text">do</b> a job last month-->
                </td>
                <td align="center">
                    <?= $model->getThirdFormExampleNegative(); ?>
<!--                    She has't already <b class="color-text">done</b> a job-->
                </td>
            </tr>


        </table>
</div>