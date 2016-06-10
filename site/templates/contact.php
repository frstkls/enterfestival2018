<?php snippet('header') ?>

<main class="contact">
    <h1><?php echo $page->title()->html() ?></h1>
    <?php echo $page->text()->kirbytext() ?>
    <hr />
    <?php snippet('contactform') ?>
</main>

<?php snippet('footer') ?>
