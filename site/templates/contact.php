<? snippet('header') ?>

<main class="contact container">
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>
    <hr />
    <? snippet('contactform') ?>
</main>

<? snippet('footer') ?>
