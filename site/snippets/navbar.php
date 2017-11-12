<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <a class="navbar-brand visible-xs" data-toggle="collapse" data-target="#navbar"><?= $site->title()->html() ?></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav mainnav">
                <li>
                    <a href=""><?php echo l::get('Programma_per_dag') ?></a>
                </li>
                <li class="dropdown">   
                    <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo page('voorstellingen')->url(); ?>" role="button" aria-haspopup="true" aria-expanded="true">    
                        <?php echo l::get('Programma_per_dag') ?>
                    </a>
                    <ul class="dropdown-menu"> 
                        <?php foreach(page('voorstellingen')->dag()->split(',') as $dag): ?>
                        <li><a href="<?php echo $site->url() ?>/voorstellingen/dag:<?=$dag?>"><?php echo $dag ?></li></a>
                        <?php endforeach ?>
                    </ul>
                </li>
                <li class="dropdown">  
                    <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo page('voorstellingen')->url(); ?>" role="button" aria-haspopup="true" aria-expanded="true">    
                        <?php echo l::get('Programma_per_zone') ?>
                    </a>
                    <ul class="dropdown-menu"> 
                        <?php foreach(page('voorstellingen')->zone()->split(',') as $zone): ?>
                        <li><a href="<?php echo $site->url() ?>/voorstellingen/zone:<?=$zone?>"><?php echo $zone ?></li></a>
                        <?php endforeach ?>
                    </ul>
                </li>

                <? foreach($pages->visible()->not('voorstellingen', 'home') as $p): ?>
                    <li <? e($p->isOpen(), ' class="active"') ?>>
                        <a href="<?= $p->url() ?>">
                            <?= $p->title()->html() ?>
                        </a>

                    </li>
                <? endforeach ?>
                <li>
                    <div class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="">    
                        <?php echo $site->language(); ?>
                    </a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">          
                        <?php foreach($site->languages() as $language): ?>
                        <li<?php e($site->language() == $language, ' class="active"') ?>>
                        <a href="<?php echo $page->url($language->code()) ?>">
                        <?php echo html($language->name()) ?>
                        </a>
                        </li>
                        <?php endforeach ?>
                      </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
