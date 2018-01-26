<br>
  <div class="container-fluid">
    <h2>Stats</h2>
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
          <th>Avgbpm</th>
          <th>Games played</th>
          <th>Winrate</th>
          <th>Games won</th>
          <th>Maxbpm</th>
          <th>Maxcombo</th>
          <th>Challenges Played</th>
          <th>Totalbpm</th>
        </tr>
      </thead>
      <tbody id="myTable">
        <?php
        foreach ($user_stats->result() as $row)
        {

          if ($row->won > 0 && $row->played > 0) {
            $winrate = round(100*($row->won / $row->played));
          }else {
            $winrate = "No Data";
          }

          echo "
          <tr>
          <td>$row->username</td>
          <td>$row->avgbpm</td>
          <td>$row->played</td>
          <td>$winrate%</td>
          <td>$row->won</td>
          <td>$row->maxbpm</td>
          <td>$row->maxcombo</td>
          <td>$row->challenges_played</td>
          <td>$row->totalbpm</td>
          </tr>";
        }?>
      </tbody>
  </table>
  </div>
