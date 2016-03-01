# Kirby-Bootstrap-Starterkit

Personal starterkit for website projects made with **Kirby**, **Bootstrap-Sass** and **Gulp**. Install guide below.

*Note: I really wanted Gulp usage to be simple and not crowded with plugins. That's why I wrote my own gulpfile.*

### Features

- Basic contactform with honeypot
- Bower
    - Bootstrap
    - jQuery
- Favicons snippet and demo files, originally generated with http://realfavicongenerator.net
- Gulp
    - Browser sync
    - Sass compression and source mapping
    - Watching stylesheets and PHP file changes via source variables 'sassinput', 'sassoutput' and 'kirby'
- .htaccess with redirect non-www to www snippet
- humans.txt and robots.txt
- jQuery snippets for targeting specific classes
- Kirby
    - Kirby submodules
    - Kirby columns plugin with Bootstrap adjustments
    - Kirbytext documentation with tips and tricks
    - Blueprints with enhanced SEO fields and links to Kirbytext documentation
- Navbar toogle animation styling
- Sass

### Requirements

1. git
2. npm
3. bower

****

#### Buy a Kirby license

Don't forget that Kirby is not for free: Please support the Kirby project by buying a license when going live with a site.

http://getkirby.com/buy

****

## Cloning

Clone this repository **recursively**, as it includes Kirby as submodules:

    git clone --recursive https://github.com/NECKRHINOS/kirby-bootstrap-starterkit.git

Configure Git's ```.config``` file to your own needs, i. e. your own remote origin.

## Installing

    npm install && bower install

## Running

    gulp

The gulpfile for this starterkit is designed for working with ```.scss``` and ```.php``` files.

## Updating

Updating Kirby:

    git submodule foreach --recursive git checkout master
    git submodule foreach --recursive git pull

Updating Bootstrap and jQuery:

    bower update --save

Updating node modules:

    npm update --save

## Kudos

Kudos to all good people mentioned in [humans.txt](https://github.com/NECKRHINOS/kirby-bootstrap-starterkit/blob/master/humans.txt)

## The future

*I might further expand this personal starterkit with more Gulp stuff like image optimization and Javascript compression/ linting etc. in the future but I'm not in a hurry.*
