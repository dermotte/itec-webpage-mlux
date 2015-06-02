<!doctype html>
<html>
<head>
    <style type='text/css'>
        @media only screen and (min-width: 800px) {
            .ui-page {
                width: 800px !important;
                margin: 0 auto !important;
                position: relative !important;
                overflow:hidden !important;
            }
        }
    </style>
    <title>Assoc. Prof. Mathias Lux - Klagenfurt University</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

</head>

<body>
<div data-role="page">
    <!--- ------------------- HEADER ------------------- -->
    <div data-role="header">
        <h1>Prof. Dr. Mathias Lux</h1>
        <a href="#nav-panel" class="ui-btn ui-icon-bars ui-btn-icon-left">Menu</a>
        <a href="index.php" class="ui-btn ui-icon-home ui-btn-icon-right">Home</a>
    </div>
    <div data-role="panel" id="nav-panel" data-position="left" data-position-fixed="true" data-display="overlay">
        <ul data-role="listview" data-theme="a" data-divider-theme="a" style="margin-top:-16px;" class="nav-search">
            <li data-icon="home">
                <a href="index.php">Home</a>
            </li>
            <li><a href="?id=research">Research</a></li>
            <li><a href="?id=courses">Courses</a></li>
            <li><a href="publications.html" data-ajax="false">Publications</a></li>
            <li><a href="http://www.lire-project.net/" rel="external">LIRE</a></li>
            <li><a href="https://bitbucket.org/dermotte/liresolr" rel="external">LIRE Solr</a></li>
            <li><a href="http://www.semanticmetadata.net" rel="external">Blog</a></li>
            <li data-icon="delete">
                <a href="#" data-rel="close">Close panel</a>
            </li>
        </ul>
    </div>
    <div role="main" class="ui-content">