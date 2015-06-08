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

    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<!--    <link rel="stylesheet" href="http://bootswatch.com/superhero/bootstrap.min.css">-->

    <!-- Optional theme -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script></head>

<body class="">
<?php
$t = $_GET["id"];
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
                <li><a href="publications.html" data-ajax="false">Publications</a></li>
                <li><a href="http://www.lire-project.net/" rel="external">LIRE</a></li>
                <li><a href="https://bitbucket.org/dermotte/liresolr" rel="external">LIRE Solr</a></li>
                <li><a href="http://www.semanticmetadata.net" rel="external">Blog</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">

    <div class="starter-template">
        <!--p><img src="images/logo.png" width="100%"/></p-->