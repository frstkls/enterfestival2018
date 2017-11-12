<? snippet('header') ?>

<main class="container home">
    <!--
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>
	-->
    <div class="row">
    	<div class="col-md-3 col-sm-6">
    		<div class="logo">
                <?php $logoimg = $site->images()->find($site->logoimg()); ?>
                <img src="<? echo $logoimg->url();?>">      
            </div>
    	</div>
    	<div class="col-md-9 col-sm-6">
            <div class="banner">
                <?php $img = $page->images()->find($page->homebanner()); ?>
                <img src="<? echo $img->url();?>">
            </div>
    	</div>
    </div>
    <!-- articles -->
    <div class="row">
    <?php foreach(page('reportages')->children() as $reportage): ?>
    <div class="col-md-3 col-sm-6 reportage">
        <article>  
            <?php 
            $image = $reportage->coverImage()->toFile(); ?>
            <a href="<?php echo $reportage->url() ?>">
                <?php if($image): ?>
                <img src="<?php echo $image->url() ?>">
                <?php endif ?>  
            </a>   
          <h3><a href="<?php echo $reportage->url() ?>"><?php echo $reportage->title()->html() ?></a></h3>
          <!-- <?php echo $reportage->text()->excerpt(200) ?> -->
          <div class="btnmargin"><button type="button" class="btn btn-secondary"><a href="<?php echo $reportage->url() ?>">Lees meer</a></button></div>
        </article>
    </div>
    <?php endforeach ?>
    </div>

</main>

<? snippet('footer') ?>
