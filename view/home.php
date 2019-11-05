
<?php
echo "<table class='table table-striped col-md-8'>"
. "            <tr>
                <th>Team Name</th>
                <th>homeGoal</th>
                <th>HomeTeam</th>
                <th>AwayGoal</th>
                <th>AwayTeam</th>
                <th>Attendance For</th>
            </tr>";
            //echo table out in a loop
foreach ($teams as $team) {
    echo "<tr>
                <td>" . $team['name'] . "</td>
                <td>" . $team['homeGoal'] . "</td>
                <td>" . $team['homeTeam'] . "</td>
                <td>" . $team['awayGoal'] . "</td>
                <td>" . $team['awayTeam'] . "</td>
                <td>" . $team['attendance'] . "</td>
            </tr>";
}
echo "</table>";
?>   

       
</div>
</div>
