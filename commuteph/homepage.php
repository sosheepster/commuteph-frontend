<?php include('header.php'); ?>

  <div class="row">
    <div class="large-9 push-3 columns">
      <section class="intro-content">
        <div class="intro-image">
          <img src="img/homepage-jeep.svg" alt="Get commuting directions at Commute.ph" />
        </div>

        <h2>Commuting is not fun in the Philippines</h2>

        <p>Commute.ph is a crow-sourced commuting guide: directions are shared by people who commute themselves to help others in the struggle of going around Manila.</p>
      </section>
      <?php include('widgets/home-needroutes.php'); ?>
    </div>
    <div class="large-3 pull-9 columns">
      <?php include('widgets/sidebar-popular.php'); ?>
      <?php include('widgets/sidebar-recentadded.php'); ?>
    </div>
  </div>

<?php include('footer.php'); ?>