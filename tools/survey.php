<?php ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
      <div class="row">
          <div class="col-sm-12">
              <h2>Anonyme Abstimmung</h2>
          </div>
      </div>
      <form method="post">
          <div class="form-group row">
              <div class="col-sm-2">
                  Ich stimme mit ...
              </div>
              <div class="col-sm-10">
                  <div class="custom-control custom-radio">
                      <input type="radio" id="voteYes" name="vote" class="custom-control-input" value="yes">
                      <label class="custom-control-label" for="voteYes">Ja</label>
                  </div>
                  <div class="custom-control custom-radio">
                      <input type="radio" id="voteInlineNo" name="vote" class="custom-control-input" value="no">
                      <label class="custom-control-label" for="voteInlineNo">Nein</label>
                  </div>
                  <div class="custom-control custom-radio">
                      <input type="radio" id="voteInlineEnthaltung" name="vote" class="custom-control-input" value="x" required>
                      <label class="custom-control-label" for="voteInlineEnthaltung">Enthaltung</label>
                  </div>
              </div>
          </div>
          <div class="form-group row">
              <label for="inputTan"  class="col-sm-2 col-form-label">TAN</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputTan" name="inputTan" placeholder="TAN" required>
              </div>
          </div>
          <div class="row">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Abschicken</button>
          </div>
      </form>
      <div class="row">
          <?php
//          if ($_POST) {
//              echo '<pre>';
//              echo htmlspecialchars(print_r($_POST, true));
//              echo '</pre>';
//          }
          if( isset($_POST['vote']) ) {
              // $array = array('vote' => $_POST['vote'],'tan' => $_POST['inputTan'],'timestamp' => time());
              $fp = fopen('results.csv', 'a');
              // fwrite($fp, json_encode($array, JSON_PRETTY_PRINT));   // here it will print the array pretty
              fwrite($fp, time()."\t".$_POST['vote']."\t".$_POST['inputTan']."\n");
              fclose($fp);
          }
          ?>
      </div>
  </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>