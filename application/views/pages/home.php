
      <main role="main">
        <div class="jumbotron">
          <h1 class="display-3 text-primary">Fastest free2play Tetris game out there!</h1>
          <p class="lead">Speedblocks is a fast-paced multiplayer tetris game that rewards successive line clears in a combo-timer system.</p>
          <p id="shake"><a class="btn btn-lg btn-success" href="<?php echo site_url("signup") ?>" role="button">Sign up today</a></p>
          <p><h4>Players online(<?php echo $player_number_online ; ?>)</h4><?php foreach ($players_online->result() as $row){echo $row->title;}; ?> </p>
          <h5>FFA(<?php echo $number_of_players_in_ffa ?>), 1v1(<?php echo $number_of_players_in_1v1 ?>), Challenges(<?php echo $number_of_players_in_challanges ?>), Lobby(<?php echo $number_of_players_in_lobby?>)</h5>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <h3 class="text-center">What is Speedblocks and what makes it different?</h3>
          </div>
          <div class="col-lg-12">
            <p class="text-center">Unlike other games, Speedblocks does not reward T-spins or Tetris clears. Play challenges to test your solo skill or compete with friends in multiplayer environments across different gamemodes</p>
          </div>
        </div>
        <div class="row marketing">
          <div class="col-lg-6">
            <h2>Race</h2>
            <p>Test your speed - clear 40 lines as fast as you can!</p>
            <img src="<?php echo base_url("images/Race.png") ?>" alt="race" height="200px">
            <br />
            <i class="fa fa-trophy fa-3x" aria-hidden="true">  <?php echo $race_mode_rank_1 ?></i>
            <br />
            <i class="fa fa-trophy fa-2x" aria-hidden="true">  <?php echo $race_mode_rank_2 ?></i>
            <br />
            <i class="fa fa-trophy fa-lg" aria-hidden="true">  <?php echo $race_mode_rank_3 ?></i>
            <br />
            <br />
            <br />
            <h2>Cheese</h2>
            <p>Test your downstack - clear the Cheese to reach the bottom!</p>
            <img src="<?php echo base_url("images/Race.png") ?>" alt="race" height="200px">
            <br />
            <i class="fa fa-trophy fa-3x" aria-hidden="true">  <?php echo $cheese_mode_rank_1 ?></i>
            <br />
            <i class="fa fa-trophy fa-2x" aria-hidden="true">  <?php echo $cheese_mode_rank_2 ?></i>
            <br />
            <i class="fa fa-trophy fa-lg" aria-hidden="true">  <?php echo $cheese_mode_rank_3 ?></i>
            <br />
            <br />
            <br />
            <h2>Survivor</h2>
            <p>Test your downstack - survive as long as you can while an ever increasing amount of garbage comes your way!</p>
            <img src="<?php echo base_url("images/survivor.png") ?>" alt="race" height="200px">
            <br />
            <i class="fa fa-trophy fa-3x" aria-hidden="true">  <?php echo $survivor_mode_rank_1 ?></i>
            <br />
            <i class="fa fa-trophy fa-2x" aria-hidden="true">  <?php echo $survivor_mode_rank_2 ?></i>
            <br />
            <i class="fa fa-trophy fa-lg" aria-hidden="true">  <?php echo $survivor_mode_rank_3 ?></i>
          </div>
          <div class="col-lg-6">
            <h2>FFA</h2>
            <p>See how you match up to other players - Last one standing wins!</p>
            <img src="<?php echo base_url("images/1v1.png") ?>" alt="race" height="200px">
            <br />
            <i class="fa fa-trophy fa-3x" aria-hidden="true">  <?php echo $ffa_mode_rank_1 ?></i>
            <br />
            <i class="fa fa-trophy fa-2x" aria-hidden="true">  <?php echo $ffa_mode_rank_2 ?></i>
            <br />
            <i class="fa fa-trophy fa-lg" aria-hidden="true">  <?php echo $ffa_mode_rank_3 ?></i>
            <br />
            <br />
            <br />
            <h2>Ranked 1v1</h2>
            <p>Challenge other players to a one-on-one showdown. First to 11 wins!</p>
            <img src="<?php echo base_url("images/1v1.png") ?>" alt="race" height="200px">
            <br />
            <i class="fa fa-trophy fa-3x" aria-hidden="true">  <?php echo $onev1_mode_rank_1 ?></i>
            <br />
            <i class="fa fa-trophy fa-2x" aria-hidden="true">  <?php echo $onev1_mode_rank_2 ?></i>
            <br />
            <i class="fa fa-trophy fa-lg" aria-hidden="true">  <?php echo $onev1_mode_rank_3 ?></i>
            <br />
            <br />
            <br />
            <h2>Tournaments and Other Rooms</h2>
            <p>Create your own Tournaments or private rooms and invite your friends to play!</p>
            <img src="<?php echo base_url("images/Race.png") ?>" alt="race" height="200px">
            <br />
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
