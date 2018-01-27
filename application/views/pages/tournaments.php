

    <div class="background">
      <h1 class="tournamentsh1">SpeedBlocks Tournaments</h1>
      <a href="#"<?php echo $leaderA->username; ?>></a>
      <!-- not sure what the line above does but have adjusted it in case we need it -->
      <ul class="leaderboardtourn">
        <li><p>Current leader for the A grade is <a href="#"><?php echo $leaderA->username; ?></a> with <?php echo $leaderA->gradeA; ?> Points</p></li>
        <li><p>Current leader for the B grade is <a href="#"><?php echo $leaderB->username; ?></a> with <?php echo $leaderB->gradeB; ?> Points</p></li>
        <li><p>Current leader for the C grade is <a href="#"><?php echo $leaderC->username; ?></a> with <?php echo $leaderC->gradeC; ?> Points</p></li>
        <li><p>Current leader for the D grade is <a href="#"><?php echo $leaderD->username; ?></a> with <?php echo $leaderD->gradeD; ?> Points</p></li>
      </ul>


      <div class="leaderboardtourn">

        <p>
          <a class="btn btn-lg btn-success scroll" href="#tournstats">Tournamen Stats</a>
          <a class="btn btn-lg btn-success" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Show Upcomming Tournaments
          </a>
        </p>
      </div>
    </div>


    <div class="collapse" id="collapseExample">
      <div class="card card-block">
        <h4 class="text-center"><?php $tourn->getupctournaments($db); ?></h4>
      </div>
    </div>

    <?php
    $firsttourn = $tourn->gettournamentstats($db,0);
    $sectourn = $tourn->gettournamentstats($db,1);
    $thirdtourn = $tourn->gettournamentstats($db,2);
    $fourthtourn = $tourn->gettournamentstats($db,3);
    ?>

    <div class="row leaderbox">

      <div class="center leaderboxes">
        <h1 class="text-centers"><?php echo $firsttourn["tournname"]; ?></h1>
        <br>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Place</th>
              <th>Name</th>
              <th>Score</th>

            </tr>
          </thead>
          <tbody id="myTable">
            <?php
            // x for the places
            $x = 1;
            foreach ($firsttourn["places"] as $username ) {
              echo "<tr>
              <td>$x </td>
              <td>$username</td>
              </tr>";
              $x ++;
            }

             ?>
          </tbody>
      </table>
      </div>


      <div class="center leaderboxes">
        <h1><?php echo $sectourn["tournname"]; ?></h1>
        <br>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Place</th>
              <th>Name</th>
              <th>Score</th>

            </tr>
          </thead>
          <tbody id="myTable">
            <?php
            // x for the places
            $x = 1;
            foreach ($sectourn["places"] as $username ) {
              echo "<tr>
              <td>$x </td>
              <td>$username</td>
              </tr>";
              $x ++;
            }

             ?>
          </tbody>
      </table>
      </div>
    </div>

    <div class="row leaderbox">
      <div class="center leaderboxes">
        <h1><?php echo $thirdtourn["tournname"]; ?></h1>
        <br>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Place</th>
              <th>Name</th>
              <th>Score</th>

            </tr>
          </thead>
          <tbody id="myTable">
            <?php
            // x for the places
            $x = 1;
            foreach ($thirdtourn["places"] as $username ) {
              echo "<tr>
              <td>$x </td>
              <td>$username</td>
              </tr>";
              $x ++;
            }

             ?>
          </tbody>
      </table>
      </div>

      <div class="center leaderboxes">
        <h1><?php echo $fourthtourn["tournname"]; ?></h1>
        <br>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Place</th>
              <th>Name</th>
              <th>Score</th>

            </tr>
          </thead>
          <tbody id="myTable">
            <?php
            // x for the places
            $x = 1;
            foreach ($fourthtourn["places"] as $username ) {
              echo "<tr>
              <td>$x </td>
              <td>$username</td>
              </tr>";
              $x ++;
            }
             ?>
          </tbody>
      </table>
      </div>
    </div>


    <div id="tournstats" class="center tournamentstats">

      <h1>Tournaments Statistics</h1>
      <br>

      <div class="col-md-3 searchbar">
        <div class="input-group">
          <input class="form-control searchbar" id="myInput" type="text" placeholder="Search..">
          <i class="fa fa-search fa-2x" aria-hidden="true"></i>
        </div>
      </div>
      <br>

      <table class="table table-hover">
        <thead>
          <tr>
            <th>Name</th>
            <th>FFA Rank (Points)</th>
            <th>Hero Rank (Points)</th>
            <th>1v1 Rank (Points)</th>
            <th>Games played (Winrate)</th>
            <th>max combo</th>
            <th>avg bpm</th>
            <th>Time played</th>
          </tr>
        </thead>
        <tbody id="myTable">
          <?php getstats($db); ?>
        </tbody>
      </table>
    </div>
