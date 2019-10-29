<?php
/**
 * @var $page \base\Page;
 */
?>

<!doctype html>
<html lang="ru">
<head>
    <?php include $page->getMeta(); ?>
    <?php include $page->getStyles(); ?>

    <title><?= $page->getTitle(); ?></title>
    <meta name="description" content="<?= $page->getDescription(); ?>">
    <meta name="keywords" content="<?= $page->getMetaTags(); ?>">
</head>
<body>
    <div class="header">
        <?php include $page->getHeader(); ?>
    </div>
    <div class="content">
        <?php
            if (!empty($page->getData()))
                extract($page->getData());

            include $page->getContent();
        ?>
    </div>
    <div class="footer">
        <?php include $page->getFooter(); ?>
    </div>
</body>
</html>