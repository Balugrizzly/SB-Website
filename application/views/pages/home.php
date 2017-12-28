
      <main role="main">
        <div class="jumbotron">
          <h1 class="display-3 text-primary">Fastest free2play Tetris game out there!</h1>
          <p class="lead">Speedblocks is a fast-paced multiplayer tetris game that rewards successive line clears in a combo-timer system.</p>
          <p id="shake"><a class="btn btn-lg btn-success" href="signup.php" role="button">Sign up today</a></p>
          <p><h4>Players online(<?php playernumberonline($conn) ?>)</h4><?php playersonline($conn) ?></p>
          <h5>FFA(<?php getnumofplayersin($conn,"ffa") ?>), 1v1(<?php getnumofplayersin($conn,"1v1") ?>), Challenges(<?php getnumofplayersin($conn,"challanges") ?>), Lobby(<?php getnumofplayersin($conn,"lobby") ?>)</h5>
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
            <img src="imgs/Race.png" alt="race" height="200px">
            <br />
            <i class="fa fa-trophy fa-3x" aria-hidden="true">  <?php getmoderanks("race",$conn,0) ?></i>
            <br />
            <i class="fa fa-trophy fa-2x" aria-hidden="true">  <?php getmoderanks("race",$conn,1) ?></i>
            <br />
            <i class="fa fa-trophy fa-lg" aria-hidden="true">  <?php getmoderanks("race",$conn,2) ?></i>
            <br />
            <br />
            <br />
            <h2>Cheese</h2>
            <p>Test your downstack - clear the Cheese to reach the bottom!</p>
            <img src="imgs/Cheese.png" alt="race" height="200px">
            <br />
            <i class="fa fa-trophy fa-3x" aria-hidden="true">  <?php getmoderanks("cheese",$conn,0) ?></i>
            <br />
            <i class="fa fa-trophy fa-2x" aria-hidden="true">  <?php getmoderanks("cheese",$conn,1) ?></i>
            <br />
            <i class="fa fa-trophy fa-lg" aria-hidden="true">  <?php getmoderanks("cheese",$conn,2) ?></i>
            <br />
            <br />
            <br />
            <h2>Survivor</h2>
            <p>Test your downstack - survive as long as you can while an ever increasing amount of garbage comes your way!</p>
            <img src="imgs/Survivor.png" alt="race" height="200px">
            <br />
            <i class="fa fa-trophy fa-3x" aria-hidden="true">  <?php getmoderanks("survivor",$conn,0) ?></i>
            <br />
            <i class="fa fa-trophy fa-2x" aria-hidden="true">  <?php getmoderanks("survivor",$conn,1) ?></i>
            <br />
            <i class="fa fa-trophy fa-lg" aria-hidden="true">  <?php getmoderanks("survivor",$conn,2) ?></i>
          </div>
          <div class="col-lg-6">
            <h2>FFA</h2>
            <p>See how you match up to other players - Last one standing wins!</p>
            <img src="imgs/1v1.png" alt="race" height="200px">
            <br />
            <i class="fa fa-trophy fa-3x" aria-hidden="true">  <?php getmoderanks("ffa",$conn,0) ?></i>
            <br />
            <i class="fa fa-trophy fa-2x" aria-hidden="true">  <?php getmoderanks("ffa",$conn,1) ?></i>
            <br />
            <i class="fa fa-trophy fa-lg" aria-hidden="true">  <?php getmoderanks("ffa",$conn,2) ?></i>
            <br />
            <br />
            <br />
            <h2>Ranked 1v1</h2>
            <p>Challenge other players to a one-on-one showdown. First to 11 wins!</p>
            <img src="imgs/1v1.png" alt="race" height="200px">
            <br />
            <i class="fa fa-trophy fa-3x" aria-hidden="true">  <?php getmoderanks("1v1",$conn,0) ?></i>
            <br />
            <i class="fa fa-trophy fa-2x" aria-hidden="true">  <?php getmoderanks("1v1",$conn,1) ?></i>
            <br />
            <i class="fa fa-trophy fa-lg" aria-hidden="true">  <?php getmoderanks("1v1",$conn,2) ?></i>
            <br />
            <br />
            <br />
            <h2>Tournaments and Other Rooms</h2>
            <p>Create your own Tournaments or private rooms and invite your friends to play!</p>
            <img src="imgs/Tournaments.png" alt="race" height="200px">
            <br />
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
