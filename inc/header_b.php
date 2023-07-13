<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Prof. Dr. Mathias Lux</title>

    <link rel="icon" type="image/png" href="favicon.png" />


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.rss.min.js"></script>
    <script src="js/showdown.min.js"></script>

    <link href="fontawesome/css/all.css" rel="stylesheet">
    <style>
        table {
            width: 100%;
        }
        /* lato-regular - latin-ext_latin */
        @font-face {
            font-family: 'Lato';
            font-style: normal;
            font-weight: 400;
            src: url('fonts/lato-v23-latin-ext_latin-regular.eot'); /* IE9 Compat Modes */
            src: local(''),
            url('fonts/lato-v23-latin-ext_latin-regular.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
            url('fonts/lato-v23-latin-ext_latin-regular.woff2') format('woff2'), /* Super Modern Browsers */
            url('fonts/lato-v23-latin-ext_latin-regular.woff') format('woff'), /* Modern Browsers */
            url('fonts/lato-v23-latin-ext_latin-regular.ttf') format('truetype'), /* Safari, Android, iOS */
            url('fonts/lato-v23-latin-ext_latin-regular.svg#Lato') format('svg'); /* Legacy iOS */
        }
    </style>
</head>

<body class="">
<?php
if (array_key_exists("id", $_GET)) {
    $t = $_GET["id"];
} else {
    $t = null;
}
?>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Prof. Lux</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <?=($t==null || $t=="main")?"class=\"active\"":""?>><a href="index.php">Home</a></li>
                <li <?=($t=="research")?"class=\"active\"":""?>><a href="index.php?id=research">Research</a></li>
                <li <?=($t=="courses")?"class=\"active\"":""?>><a href="index.php?id=courses">Courses</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quick Links<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="index.php?id=courses/topics-cg-ws23.md">Advanced Topics in Computer Graphics WS 2023/2024</a></li>
<!--                        <li><a href="index.php?id=courses/esop18">VO ESOP WS 2018/2019</a></li>-->
<!--                        <li><a href="index.php?id=courses/gameengineering-ws2122.md">Game Engineering WS 2021/2022</a></li> -->
                        <li><a href="index.php?id=courses/gameengineering-ws2324.md">Game Engineering WS 2023/2024</a></li>
<!--                        <li><a href="index.php?id=courses/seriousgames-ws2122.md">Non Entertainment Games WS 2021/2022</a></li> -->
<!--                        <li role="separator" class="divider"></li>-->
<!--                        <li><a href="index.php?id=courses/mmisss17">Multimedia Information Systems SS 2017</a></li>-->
<!--                        <li><a href="index.php?id=courses/games-ss17.md">Games SS 2017</a></li>-->
<!--                        <li><a href="index.php?id=courses/seminardms-ss17.md">Seminar Distributed Systems SS 2017</a></li>-->
                    </ul>
                </li>
                <li><a href="publications.html" data-ajax="false">Publications</a></li>
                <li><a href="http://www.lire-project.net/" rel="external">LIRE</a></li>
                <!--li><a href="https://sites.google.com/view/gameactivitesaau" rel="external"><i class="fa fa-gamepad"></i> Games</a></li-->
                <!--li><a href="https://bitbucket.org/dermotte/liresolr" rel="external">LIRE Solr</a></li>-->
                <!--li><a href="http://www.semanticmetadata.net" rel="external">Blog</a></li-->
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
