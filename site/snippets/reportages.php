<!-- articles -->
<div class="row">
<?php foreach(page('reportages')->children() as $reportage): ?>
<div class="col-md-3 reportage">
<article>  
  <?php $image = $reportage->coverImage()->toFile(); ?>
	<a href="<?php echo $reportage->url() ?>">
		<img src="<?php echo $image->url() ?>">
	</a>   
  <h1><a href="<?php echo $reportage->url() ?>"><?php echo $reportage->title()->html() ?></a></h1>
  <?php echo $reportage->text()->excerpt(300) ?>
</article>
</div>
<?php endforeach ?>
</div>
