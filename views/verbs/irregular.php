<?php

/**
 * @var $page \base\Page;
 * @var $model \app\model\Verb;
 */

$page->title = ucfirst($model->getFirstForm()) . " - HelpTense";
$page->description = "HelpTense - сайт, который поможет разобраться в английских временах и узнать формы глаголов.";
$page->keywords = "неправильные глаголы, английские глаголы";

?>

<div class="content">
    
    <form action="/search/verb/" method="POST">
            <input name="verb" placeholder="Введите глагол..." type="search">
            <button type="submit"><img class="search" src="/img/search_w.png"></button>
    </form>

    <div align="center" class="sign-verb">
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