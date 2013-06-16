<?php include('header.php'); ?>

  <div class="row">
    <div class="large-9 push-3 columns">
      <section class="intro-content">
        <div class="intro-image">
          <img src="img/homepage-jeep.svg" alt="Get commuting directions at Commute.ph" />
        </div>

        <h2>About Commute.PH</h2>

        <h3>Beginnings</h3>
        <p>We started Commute.ph in 2012, which ended up being released in the wild due to our participation in the <a href="http://manila.startupweekend.org/2012/04/28/team-update-at-the-eve-of-day-2/" target="_blank">2012 Startup Weekend Manila (April)</a>. The team was in hiatus for over a year due to individual projects until our re-launch on July 2013.</p>

        <h3>Founders</h3>
        <div class="team-photos">
          <ul class="small-block-grid-2 large-block-grid-4">
            <li class="team-member jolo">
              <img src="img/team-jolo.jpg">
              <div class="position">Jolo, Developer,<br />
                <a href="http://readborg.com">Readborg</a></div>
            </li>
            <li class="team-member ian">
              <img src="img/team-ian.jpg">
              <div class="position">Ian, Developer</div>
            </li>
            <li class="team-member camille">
              <img src="img/team-camille.jpg">
              <div class="position">Camille, Designer,<br />
                <a href="http://camille.ph">camille.ph</a></div>
            </li>
            <li class="team-member jp">
              <img src="img/team-jp.jpg">
              <div class="position">JP, Developer</div>
            </li>
          </ul>
        </div>

        <h3>Vision</h3>
        <p>We started <a href="http://commute.ph">Commute.PH</a> because we weren't satisfied with the commuting guides we've seen online. We wanted to make it easier to get directions going around the Philippines, specifically Manila, where the commuting system is different (and less organized) than other parts of the world.</p>

        <h3>Development</h3>
        <p><strong>Commute.PH</strong> is <strong>crowd-sourced</strong> and we're always looking for <a href="contribute.php">Contributors</a> to help us add routes and directions, as well as clean up data. </p>
        <p>Mobile apps are currently being planned.</p>

      </section>

    </div>
    <div class="large-3 pull-9 columns">
      <?php include('widgets/sidebar-popular.php'); ?>
      <?php include('widgets/sidebar-recentadded.php'); ?>
    </div>
  </div>

<?php include('footer.php'); ?>