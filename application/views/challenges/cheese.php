<br>
<br>
<h1>Cheese</h1>
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
      <th class="rankmargine">Rank</th>
      <th>Name</th>
      <th>Time</th>
      <th>Blocks</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody id="myTable">
    <?php
    foreach ($users_ranking_cheese->result() as $row)
    {
      $secs = $row->time / 1000;
      $ms = $row->time % 1000;
      $seconds = $secs % 60;
      $minutes = ($row->time / (60 *1000)% 60);
      $rank++;

      echo "
      <tr>
      <td>$rank</td>
      <td>$row->username</td>
      <td>$minutes:$seconds:$ms</td>
      <td>$row->Blocks</td>
      </tr>";
    }?>
  </tbody>

</table>
