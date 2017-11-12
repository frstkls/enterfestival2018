<?php
  return function($site, $pages, $page) {
    $voorstellingen = page('voorstellingen')
                          ->children()
                          ->visible();   
    if($dag = param('dag')) {
      $voorstellingen =  page('voorstellingen')
                            ->children()
                            ->visible()
                           ->filterBy('dag', $dag, ',');
    }
    if($zone = param('zone')) {
      $voorstellingen =  page('voorstellingen')
                            ->children()
                            ->visible()
                           ->filterBy('zone', $zone, ',');
    }                   
      return compact('voorstellingen');

  };
?>



