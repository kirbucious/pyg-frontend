<?php include 'head.php' ?>
        <div id="Leaderboard" class="leaderboard content">
                <ul class="leaderboard-list">
                        <li class="leaderboard-list-item">
                                <a class="leaderboard-list-item-link" href="gamer_profile.php">
                                </a>
                                <span class="leaderboard-list-item-rank">1</span>
                                <img class="leaderboard-list-item-avatar" src="img/placeholder-user-avatar.png"/>
                                <span class="leaderboard-list-item-name">Firstname Lastname</span>
                                <span class="leaderboard-list-item-change icon-block leaderboard-list-item-change-icon_up">navigateup</span>
                                </span>
                                <span class="leaderboard-list-item-amount">$42,543</span>
                        </li>
                        <li class="leaderboard-list-item">
                                <a class="leaderboard-list-item-link" href="gamer_profile.php">
                                </a>
                                <span class="leaderboard-list-item-rank">2</span>
                                <img class="leaderboard-list-item-avatar" src="img/placeholder-user-avatar.png"/>
                                <span class="leaderboard-list-item-name">Firstname Lastname</span>
                                <span class="leaderboard-list-item-change icon-block leaderboard-list-item-change-icon_down">navigatedown</span>
                                </span>
                                <span class="leaderboard-list-item-amount">$41,698</span>
                        </li>
                        <?php for($i=2; $i<=40; $i++){ ?>
                        <li class="leaderboard-list-item">
                                <a class="leaderboard-list-item-link" href="gamer_profile.php">
                                </a>
                                <span class="leaderboard-list-item-rank"><?php echo $i ?></span>
                                <img class="leaderboard-list-item-avatar" src="img/placeholder-user-avatar.png"/>
                                <span class="leaderboard-list-item-name">Firstname Lastname</span>
                                <span class="leaderboard-list-item-change icon-block leaderboard-list-item-change-icon_down"></span>
                                </span>
                                <span class="leaderboard-list-item-amount">$20,000</span>
                        </li>
                        <?php } ?>
                </ul> <!--end leaderboard-list -->
        </div> <!--end leaderboard-->
</body>