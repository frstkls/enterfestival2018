<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?= $page->title()->html() ?> -
            <? if ($page->titlesuffix() != ''): ?>
                <?= $page->titlesuffix()->html() ?>
                <? else: ?>
                   <?= $site->titlesuffix()->html() ?>
            <? endif ?>
            &#124;&nbsp;<?= $site->title()->html() ?>
        </title>
        <meta name="author" content="<?= $site->author()->html() ?>">
        <? if ($page->description() != ''): ?>
            <meta name="description" content="<?= $page->description()->html() ?>">
            <? else: ?>
                <meta name="description" content="<?= $site->description()->html() ?>">
        <? endif ?>
        <meta name="robots" content="index, follow">
        <link rel="author" href="humans.txt">
        <?= css('assets/css/main.min.css') ?>
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <? snippet('favicons') ?>
    </head>
    <body>
        <div id="wrap">
            <div id="main">
                <header></header>
                <? snippet('navbar') ?>
