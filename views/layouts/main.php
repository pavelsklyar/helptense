<?php
/**
 * @var $page base\Page;
 */

use base\Page; ?>

<!doctype html>
<html lang="ru">
<head>
    <?php echo $page->scripts; ?>
    <?php include $page->meta; ?>
    <?php echo $page->styles; ?>
    <title><?= $page->title; ?></title>

    <?php if ($page->description != '') : ?>
        <meta name="description" content="<?= $page->description; ?>">
    <?php endif; ?>

    <?php if ($page->keywords != '') : ?>
        <meta name="keywords" content="<?= $page->keywords; ?>">
    <?php endif; ?>
</head>
<body>
    <div class="main">
        <?php if (Page::checkContent('header')) : ?>
        <div class="nav">
            <?php include $page->getHeader(); ?>
        </div>
        <?php endif; ?>

        <div class="content">
            <?php
                if (!empty($page->getContent()))
                    echo $page->getContent();
            ?>
        </div>

        <?php if (Page::checkContent('footer')) : ?>
        <div class="footer">
            <?php include $page->getFooter(); ?>
        </div>
        <?php endif; ?>
    </div>
</body>
</html>