<?php
  return function($site, $pages, $page) {
    $voorstellingen = page('voorstellingen')
                          ->children()
                          ->visible();   
    if($dag = param('categorie')) {
      $voorstellingen =  page('voorstellingen')
                            ->children()
                            ->visible()
                            ->filterBy('categorie', $categorie, ',');
    }
      return compact('voorstellingen');

  };
?>



