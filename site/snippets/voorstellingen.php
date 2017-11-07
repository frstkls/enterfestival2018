
<!-- articles -->
<div class="row">
<?php foreach($voorstellingen as $voorstelling): ?>
<div class="col-md-3 voorstelling">
<article>  
  <?php $image = $voorstelling->coverImage()->toFile(); ?>
	<a href="<?php echo $voorstelling->url() ?>">
		<img src="<?php echo $image->url() ?>">
	</a>   
  <h1><a href="<?php echo $voorstelling->url() ?>"><?php echo $voorstelling->title()->html() ?></a></h1>
  <?php echo $voorstelling->text()->excerpt(300) ?>
</article>
</div>
<?php endforeach ?>



</div>
