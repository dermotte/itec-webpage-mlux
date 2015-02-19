<?php include("inc/header_b.php"); ?>
<?php
try {
    $t = $_GET["id"];
    if ($t == null) {
        include("main.php");
    } else {
        if (preg_match("/^[a-z0-9]+$/", $t)) {
            if(!@include($t . ".php")) throw new Exception("No such page!");
        } elseif (preg_match("/^courses\/[a-z0-9]+$/", $t)) {
            if(!@include($t . ".html")) throw new Exception("No such page!");

        }
    }
} catch (Exception $e) {
    echo "<h1>No such page!</h1>";
}
?>
<?php include("inc/footer_b.php"); ?>