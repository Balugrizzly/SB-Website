<!DOCTYPE html>
  <html>
    <head>
      <title>SpeedBlocks</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
      <link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU" crossorigin="anonymous">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      <?php echo link_tag('css/narrow-jumbotron.css'); ?>
      <?php echo link_tag('css/style.css'); ?>
    </head>
    <body>
      <body onload="shake()">
      <div class="container-fluid">
        <header class="header clearfix">
          <nav>
            <ul class="nav nav-pills float-right">
              <li class="nav-item">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://speedblocks.se/forum/index.php" target="_blank">Forum</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ranking</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item test" href="challenges.php">Challenges</a>
                  <a class="dropdown-item" href="stats.php">Stats</a>
                  <a class="dropdown-item" href="tourn.php">Tournaments</a>
                  <!-- <div class="dropdown-divider"></div> -->
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="https://discord.gg/fJREyFR" target="_blank">Discord</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Contact</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="mailto:speedblocks@tuta.io">E-Mail:speedblocks@tuta.io</a>
                  <!-- <div class="dropdown-divider"></div> -->
                </div>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="mediawiki/index.php">Wiki</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="https://github.com/kroyee/SpeedBlocks/releases" target="_blank">Download</a>
            </li>
            </ul>
          </nav>
          <img src="<?php echo base_url('images/logo.png'); ?>" alt="Logo" height="120px">
        </header>
      </div>
      <!--Starting container which gets ended in the footer-->
      <div class="container">
