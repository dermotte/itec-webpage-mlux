<?php
date_default_timezone_set("Europe/Vienna");
$start_time = strtotime("2015-06-08 18:00:00");
if (time() > $start_time) {
    header("refresh:0;url=http://doodle.com/z59xav5e8e5d2x6h");
} else {
    ?>

    <?php include("inc/header_b.php"); ?>
    <div class="row">
        <div class="col-md-12">
            <h3>Abschlußpräsentationen VK Computer Games Sommer 2015</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>
                Frühestmögliche Eintragung in die Liste:
                <?php
                echo date('Y-m-d H:i:s', $start_time);
                ?>
            </p>

            <p>
                Derzeitige Serverzeit:
                <?php
                echo date('Y-m-d H:i:s');
                ?>
            </p>
        </div>
    </div>
    <?php include("inc/footer_b.php"); ?>
<?php
}
?>