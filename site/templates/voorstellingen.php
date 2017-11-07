<?php snippet('header') ?>

	<div class="containerfullwidth" role="main">
		<div class="text">
			<h1><?php echo $page->title()->html() ?></h1>
			
			<!-- <?php echo $page->text()->kirbytext() ?> -->
		</div>
    <hr>
    <div class="voorstellingenfilter">
		<ul class="nav nav-tabs">
		  <li class="active"><a data-toggle="tab" href="#perdag">Per dag</a></li>
		  <li><a data-toggle="tab" href="#perzone">Per zone</a></li>
		</ul>
		<div class="tab-content">
		  <div id="perdag" class="tab-pane fade in active">
			<div class="btn-group"> 
				<?php foreach(page('voorstellingen')->dag()->split(',') as $dag): ?>
				<button class="btn"><a href="<?php echo $site->url() ?>/voorstellingen/dag:<?=$dag?>"><?php echo $dag ?></a></button>
				<?php endforeach ?>
			</div>
		  </div>
		  <div id="perzone" class="tab-pane fade">
			<div class="btn-group"> 
				<?php foreach(page('voorstellingen')->zone()->split(',') as $zone): ?>
                <button class="btn"><a href="<?php echo $site->url() ?>/voorstellingen/zone:<?=$zone?>"><?php echo $zone ?></a></button>
                <?php endforeach ?>
			</div>
		  </div>
		</div>	
	</div>
    <?php snippet('voorstellingen') ?>
	</div> <!-- // container -->

<?php snippet('footer') ?>