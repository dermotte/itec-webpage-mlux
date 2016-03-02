<?php include("inc/header_b.php"); ?>
<?php
try {
    if (!array_key_exists("id", $_GET)) {
        include("main.php");
    } else {
        $t = $_GET["id"];
        if (preg_match("/^[a-z0-9\-]+$/", $t)) {
            if (!@include($t . ".php")) throw new Exception("No such page!");
        } elseif (preg_match("/^(courses)?\/[a-z0-9\-]+\.md$/", $t)) {
            echo "<div class=\"row\" id=\"content\"/>";
            echo "<script language=\"JavaScript\">var converter = new showdown.Converter();
                        converter.setOption('tables', true);
                        $.get( \"" . $t . "\", function( data ) {
                        console.log(data);
                            $(\"#content\").html(converter.makeHtml( data ));
                        }).error(function(result) {
                            $(\"#content\").html(\"<h1>No such page!</h1>\");
                        } );
                        </script>
                        ";
        } elseif (preg_match("/^courses\/[a-z0-9\-]+$/", $t)) {
            if (!@include($t . ".html")) throw new Exception("No such page!");
        } else {
            throw new Exception("No such page!");
        }
    }
} catch (Exception $e) {
    echo "<h1>No such page!</h1>";
}
?>
<?php include("inc/footer_b.php"); ?>