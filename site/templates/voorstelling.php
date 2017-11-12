<?php snippet('header') ?>

	<main class="container" role="main">
		<div class="text">
		<div class="row">
			<div class="col-md-6">
				<h1><?php echo $page->title()->html() ?></h1>
			</div>
			<div class="col-md-6">
				<div class="projectdescription"><?php echo $page->text()->kirbytext() ?></div>
			</div>
		</div>
			<div class="mygrid">
			<div class="grid-sizer"></div>
			<div class="gutter-sizer"></div>
				<?php foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
					<div class="grid-item <?php if ($image->toggle() == 'true'){echo  "fullwidth";} else{echo "";} ?>">
						<a href="<?php echo $image->url() ?>" class="thumbnail">
						<img src="<?php echo $image->url() ?>" alt="<?php echo $page->title()->html() ?>">
						</a>
					</div>
       <?php endforeach ?>
			</div>
			
		</div>
		
		<!-- <?php snippet('nav-pager') ?> -->
				
	</main> <!-- // container -->

<?php snippet('footer') ?>
<script>
$('.thumbnail').magnificPopup({
  type: 'image',
  gallery:{
    enabled:true,
	arrowMarkup: '<button title="%title%" type="button" class="fa fa-lg fa-angle-%dir% mfp-arrow-%dir% prevnext"></button>', // markup of an arrow button
	tPrev: 'Previous image', // title for left button
    tNext: 'Next image' // title for right button
  }
});
</script>