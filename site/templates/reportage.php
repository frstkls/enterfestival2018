<? snippet('header') ?>

<main class="container default">
	<div class="row">
	 	<div classs="col-md-9">
		    <h1><?= $page->title()->html() ?></h1>
		    <?= $page->text()->kirbytext() ?>
		</div>
		<div classs="col-md-3">
			<?php 
			$reportages = $page->reportages()->yaml();
			foreach($reportages as $reportage): ?>   
			<div class="col-md-3 voorstelling">
			<article>  
			<h1><a href="<?php echo $reportage->url() ?>"><?php echo $reportage->title()->html() ?></a></h1>
			</article>
			<?php endforeach ?>
		</div>
	</div>
</main>

<? snippet('footer') ?>
