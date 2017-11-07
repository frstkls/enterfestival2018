<nav class="navbar navbar-default">
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
            <ul class="nav mainnav nav-justified">
                <li>              
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo page('voorstellingen')->url(); ?>">    
                            Programma per dag
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu"> 
                            <?php foreach(page('voorstellingen')->dag()->split(',') as $dag): ?>
                            <li><a href="<?php echo $site->url() ?>/voorstellingen/dag:<?=$dag?>"><?php echo $dag ?></li></a>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </li>
                <li>              
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="<?php echo page('voorstellingen')->url(); ?>">    
                            Programma per zone
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu"> 
                            <?php foreach(page('voorstellingen')->zone()->split(',') as $zone): ?>
                            <li><a href="<?php echo $site->url() ?>/voorstellingen/zone:<?=$zone?>"><?php echo $zone ?></li></a>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </li>

                <? foreach($pages->visible()->not('voorstellingen') as $p): ?>
                    <li <? e($p->isOpen(), ' class="active"') ?>>
                        <a href="<?= $p->url() ?>">
                            <?= $p->title()->html() ?>
                        </a>

                    </li>
                <? endforeach ?>
            </ul>
        </div>
    </div>
</nav>
