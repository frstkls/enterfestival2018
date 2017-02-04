<? snippet('header') ?>

<main class="home">
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>
</main>

<? snippet('footer') ?>
