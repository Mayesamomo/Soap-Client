<!------Bootstrap COL for layout-->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <img class="card-img-top" src="../img/<?php echo $id ?>.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title">
                  <?php echo $aTeam['name'] ?>
                </h4>
                <h5>Home Goals :<?php echo $aTeam['homeGoal'] ?></h5>
                <h5>Home Team :<?php echo $aTeam['homeTeam'] ?></h5>
                <h5>Away Goals :<?php echo $aTeam['awayGoal'] ?></h5>
                <h5>Away Team :<?php echo $aTeam['awayTeam'] ?></h5>
                <h5>Attendance :<?php echo  $aTeam['attendance'] ?></h5>
                
              </div>
            </div>
          </div>
</div>
</div>
