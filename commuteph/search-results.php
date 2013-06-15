<?php include('header.php'); ?>

  <div class="row">
    <div class="large-6 columns">
      <section class="search">
        <h2><span class="desc">SEARCHING ROUTES FROM </span>
            <span class="pointA">Cubao Station (MRT)</span> to <span class="pointB">Eastwood City</span></h2>
        <h3>Routes Found: 2</h3>
        <section class="set-directions">
          <h4><a href="#route-page">From Cubao Station (MRT) To Eastwood City</a></h4>
          <div class="directions">
            <ul class="list-directions">
              <li>Ride Jeep to <strong>Eastwood City</strong> bound to <em>Rosario</em></li>
              <li>Ride Jeep to <strong>Eastwood City</strong> bound to <em>Rosario</em></li>
            </ul>
          </div>
          <div class="reactions">
            <ul class="inline-list">
              <li><a href="#">Upvote</a></li>
              <li><a href="#">Downvote</a></li>
              <li><a href="#">Comments</a></li>
              <li><a href="#" data-dropdown="route-share-ID">Share</a></li>
            </ul>
          </div>

          <ul id="route-share-ID" class="f-dropdown" data-dropdown-content>
            <li><a href="#">Post on Facebook</a></li>
            <li><a href="#">Share on Twitter</a></li>
          </ul>
        </section>
        <section class="set-directions">
          <h4><a href="#route-page">From UP To Eastwood City</a></h4>
          <div class="directions">
            <ul class="list-directions">
              <li>Ride Jeep to <strong>Katipunan</strong> bound to <em>Katipunan</em></li>
              <li>Ride <strong>LRT2 to Cubao</strong></li>
              <li>Ride Jeep to <strong>Eastwood City</strong> bound to <em>Rosario</em></li>
            </ul>
          </div>
          <div class="reactions">
            <ul class="inline-list">
              <li><a href="#">Upvote</a></li>
              <li><a href="#">Downvote</a></li>
              <li><a href="#">Comments</a></li>
              <li><a href="#" data-dropdown="route-share-2">Share</a></li>
            </ul>
          </div>

          <ul id="route-share-2" class="f-dropdown" data-dropdown-content>
            <li><a href="#">Post on Facebook</a></li>
            <li><a href="#">Share on Twitter</a></li>
          </ul>
        </section>

        <a href="#add-directions" class="button expand">
          <span class="desc">Have a better route in mind?</span>
          <span class="action">Add Directions</span>
        </a>
      </section>
    </div>
    <div class="large-3 columns">
      <?php include('widgets/sidebar-needroutes.php'); ?>
    </div>
    <div class="large-3 columns">
      <?php include('widgets/sidebar-popular.php'); ?>
      <?php include('widgets/sidebar-recentadded.php'); ?>
    </div>
  </div>

<?php include('footer.php'); ?>