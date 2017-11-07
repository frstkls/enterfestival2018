<? snippet('header') ?>

<main class="container home">
    <!--
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>
	-->
    <div class="row">
    	<div class="col-md-3 logo">
    		Logo
    	</div>
    	<div class="col-md-9 banner">
        <?php $img = $page->images()->find($page->homebanner()); ?>
        <img src="<? echo $img->url();?>">
    	</div>
    </div>
</main>

<? snippet('footer') ?>
