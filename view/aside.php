<div class="container">
    <div class="row">
        <div class="col-lg-3">

            <h1 class="my-4">Operations</h1>
            <div class="list-group">
                <div class="list-group-item">
                    <form method="post" class="mdb-select md-form">
                        <select class="mdb-select md-form" name="singleTeam">
                            <?php
                            foreach ($clubs as $club) {
                                echo '<option value="' . $club['id'] . '">' . $club['name'] . '</option>';
                            }
                            ?>
                        </select>
                        <input type="hidden" value="singleTeam" name="action">

                        <button class="btn btn-warning" type="submit">Select</button>
                    </form>
                </div>
                <div class="list-group-item">
                    <form method="post" class="mdb-select md-form">
                        <select class="mdb-select md-form" name="team1">
                            <?php
                            foreach ($clubs as $club) {
                                echo '<option value="' . $club['id'] . '">' . $club['name'] . '</option>';
                            }
                            ?>
                        </select>
                        <select  name="team2">
                            <?php
                            foreach ($clubs as $club) {
                                echo '<option value="' . $club['id'] . '">' . $club['name'] . '</option>';
                            }
                            ?>
                        </select>
                        <input type="hidden" value="compare" name="action">

                        <button class="btn btn-warning" type="submit">Select</button>
                    </form>
                </div >                  
            </div>

        </div>
