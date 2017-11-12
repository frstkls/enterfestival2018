<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/

c::set('sitemap.exclude', array('error'));
c::set('debug', true);
c::set('languages', array(
  array(
    'code'    => 'fr',
    'name'    => 'FR',
    'default' => true,
    'locale'  => 'fr_FR',
    'url'     => '/',
  ),
  array(
    'code'    => 'nl',
    'name'    => 'NL',
    'locale'  => 'nl_NL',
    'url'     => '/nl',
  ),
  array(
    'code'    => 'en',
    'name'    => 'EN',
    'locale'  => 'en_US',
    'url'     => '/en',
  ),
));
c::set('language.detect', true);
c::set('cache', false);