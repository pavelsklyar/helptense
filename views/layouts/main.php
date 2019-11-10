<?php
/**
 * @var $page \app\base\Page;
 */
?>

<!doctype html>
<html lang="ru">
<head>
    <?php include $page->getMeta(); ?>
    <?php include $page->getStyles(); ?>

    <title><?= $page->getTitle(); ?></title>
    <meta name="description" content="<?= $page->getDescription(); ?>">
    <meta name="keywords" content="<?= $page->getKeywords(); ?>">
</head>
<body>
    <div class="body">
        <div class="header">
            <?php include $page->getHeader(); ?>
        </div>
        <div class="content">
            <?php
                if (!empty($page->getData()))
                    extract($page->getData());

                if (!empty($page->getContent()))
                    include $page->getContent();
            ?>
        </div>
        <div class="footer">
            <?php include $page->getFooter(); ?>
        </div>
    </div>
</body>
</html>