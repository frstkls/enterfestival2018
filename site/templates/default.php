<? snippet('header') ?>

<main class="default container">
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>
</main>

<? snippet('footer') ?>
