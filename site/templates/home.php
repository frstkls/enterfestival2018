<?php snippet('header') ?>

<main class="home">
    <h1><?php echo $page->title()->html() ?></h1>
    <?php echo $page->text()->kirbytext() ?>
</main>

<?php snippet('footer') ?>
